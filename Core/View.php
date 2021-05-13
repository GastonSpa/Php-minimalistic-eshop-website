<?php

namespace Core;

// use Twig;

class View {

    // Render a view file
    // $view is The view file
    // $args is an Associative array of data to display in the view (optional)
    public static function render($view, $args = []){

        extract($args, EXTR_SKIP);

        $file = dirname(__DIR__) . "/App/Views/$view";  // relative to Core directory

        if (is_readable($file)){
            require $file;
        } else{
            // echo "file not found";
            throw new \Exception("$file not found");
        }
    }

    // Render a view template using Twig
    // $template is The template file
    // $args is an Associative array of data to display in the view (optional)
    public static function renderTemplate($template, $args = []) {
        // require_once dirname(__DIR__) . '\vendor\autoload.php';

        static $twig = null;
        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(dirname(__DIR__) . '/App/Views');
            $twig = new \Twig\Environment($loader);
            // $loader = new \Twig_Loader_Filesystem(dirname(__DIR__) . '/App/Views');
            // $twig = new \Twig_Environment($loader);
            // $loader = new \Twig\Loader\Filesystem(dirname(__DIR__) . '/App/Views');
            // $twig = new \Twig\Environment($loader);
        }

        echo $twig->render($template, $args);
    }

}