<?php

namespace Core;

class Router{

    // routing table, populated during calls to add() method
    //contain routes url associated to params of add() method
    protected $routes = [];

    // Parameters from the matched route
    protected $params = [];

    // Add a route to the routing table
    // $route is The route URL
    // $params is Parameters (controller, action, etc.)
    public function add($route, $params=[]){
        // Convert the route to a regular expression: escape forward slashes
        $route = preg_replace('/\//', '\\/', $route);

        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        // Convert variables with custom regular expressions e.g. {id:\d+}
        $route = preg_replace('/\{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);

        // Add start and end delimiters, and case insensitive flag
        $route = '/^' . $route . '$/i';

        // affect $routes array prop at key of the route of the current add() appeal to params 'inputed' during that add() method use
        //in other word, we store params of add()) appeal in $routes prop array
        $this->routes[$route] = $params;
    }

    // return array
    // all routes from routing table
    public function getRoutes(){
        return $this->routes;
    }

    // Match (associe) the route to the routes in the routing table, setting the $params property if a route is found.
    // $url is The route URL (string)
    // return boolean true if a match is found, false otherwise
    public function match($url){
        foreach ($this->routes as $route => $params){
            if (preg_match($route, $url, $matches)){
                foreach ($matches as $key => $match){
                    if (is_string($key)){
                        $params[$key] = $match;
                    }
                }
                $this->params = $params;
                return true; 
            }
        }
        return false;
    }

    // Get the currently matched parameters
    public function getParams(){
        return $this->params;
    }

    // Convert the string with hyphens to camelCase,
    // e.g. add-new => addNew
    // $string is The string to convert
    // return string
    protected function convertToCamelCase($string){
        return lcfirst($this->convertToStudlyCaps($string));
    }

    //Convert the string with hyphens to StudlyCaps,
    // e.g. post-authors => PostAuthors
    // $string is The string to convert
    // return string
    protected function convertToStudlyCaps($string){
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }

    // Remove the query string variables from the URL (if any).
    public function removeQueryStringVariables($url){
        if ($url != ''){
            $parts = explode('&', $url, 2);

            if(strpos($parts[0], '=') === false){
                $url = $parts[0];
            } else{
                $url = '';
            }
        }
        return $url;
    }

    // Get the namespace for the controller class. The namespace defined in the route parameters is added if present.
    protected function getNamespace(){
        $namespace = 'App\Controllers\\';

        if (array_key_exists('namespace', $this->params)){
            $namespace .= $this->params['namespace'] . '\\';
        }

        return $namespace;
    }

    // Dispatch (envoie) the route, creating the controller object and running the action method
    // $url is the route URL
    // major method using most of other methods defined before in this file
    public function dispatch($url){
        $url = $this->removeQueryStringVariables($url);

        if ($this->match($url)){ // true if the $url (route url) param match a route in the routing table
            $controller = $this->params['controller'];
            $controller = $this->convertToStudlyCaps($controller);
            $controller = $this->getNamespace() . $controller;

            if (class_exists($controller)){
                $controller_object = new $controller($this->params);

                $action = $this->params['action'];
                $action = $this->convertToCamelCase($action);

                if (preg_match('/action$/i', $action) == 0){
                    $controller_object->$action();
                } else {
                    throw new \Exception("Method $action in controller $controller cannot be called directly - remove the Action suffix to call this method");
                }
            } else {
                throw new \Exception("Controller class $controller not found");
            }
        } else {
            throw new \Exception('No route matched.', 404);
        }
    }

}