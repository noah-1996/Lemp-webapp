<?php
namespace controller;

class Request implements IRequest{
    function __construct(){
        $this->bootstrapSelf();
    }

    //set all keys in the global $_SERVER as properties of the class and assigns their values;
    private function bootstrapSelf(){
        foreach($_SERVER as $key => $value){
            $this->{$this->toCamelCase($key)} = $value;
        }
    }

    //converts snake_case to CamelCase
    private function toCamelCase($string){
        $result = strtolower($string);
        preg_match_all('/_[a-z]/', $result, $matches);

        foreach($matches[0] as $match){
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }

        return $result;
    }

    //implements the method from the IRequest interface
    public function getBody(){
        if($this->requestMethod === "GET"){
            return;
        }

        if($this->requestMethod == "POST"){
            $body = array();
            foreach($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            return $body;
        }
    }
}