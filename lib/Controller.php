<?php

namespace Library;

abstract class Controller {

    function get($item, $default=null){
        return (isset($_GET[$item])?$_GET[$item]:$default);
    }

    function post($item, $default=null){
        return (isset($_POST[$item])?$_POST[$item]:$default);
    }

    function isPOST(){
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    function isGET(){
        return $_SERVER['REQUEST_METHOD'] == 'GET';
    }

    function isXmlHttpRequest(){
        $headers = apache_request_headers();
        $xhr = (isset($headers['X-Requested-With']))?$headers['X-Requested-With']:null;

        return 'XMLHttpRequest' == $xhr;
    }

    function redirect($path){
        header("Location: $path", true, 302); exit;
    }

}
