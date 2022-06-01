<?php

class App
{

    protected $controller = '_404';
    protected $method = 'index';

    public function __construct()
    {
        $url = $this->getURL();

        // check if $_GET url has a file with its current value
        $filename = "../app/controllers/" . ucwords($url[0]) . ".php";
        if (file_exists($filename)) {

            //if true require the file
            require $filename;

            //set the file as a controller
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            # if false return default (_404) controller
            require "../app/controllers/" . $this->controller . ".php";
        }

        //return the controller and create the controller class instance 
        // the first url parameter will represent file/class
        $mainController = new $this->controller();

        /* after the file class instance
         call necessary method in the class
         second parameter in the url will reprent the method
        */
        $method_call = $url[1] ?? $this->method;
        if (!empty($url[1])) {
            if (method_exists($mainController, strtolower($method_call))) {

                $this->method = strtolower($method_call);
                unset($url[1]);
            }
        }



        //reset the array content
        $url = array_values($url);

        // execute the method
        /**
         * first arg represent the class and method to execute
         * second arg represent the method parameters
         * * */

        call_user_func_array([$mainController, $this->method], $url);
    }

    protected function getURL()
    {
        $url = $_GET['url'] ?? 'home';
        $url = filter_var($url, FILTER_SANITIZE_URL);

        $arr = explode("/", $url);
        return $arr;
    }
}
