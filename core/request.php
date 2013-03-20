<?php
class Request
{

    private $_controller;

    private $_method;

    private $_args;

    public function __construct()
    {
        $parts = $_SERVER['PATH_INFO'];
        $parts = explode('/', $parts);
        $parts = array_filter($parts);
        $this->_controller = ($c = array_shift($parts)) ? $c : 'home';
        $this->_method = ($c = array_shift($parts)) ? $c : 'index';
        $this->_args = (isset($parts[0])) ? $parts : array();
    }

    public function getController()
    {
        return $this->_controller;
    }

    public function getMethod()
    {
        return $this->_method;
    }

    public function getArgs()
    {
        return $this->_args;
    }
}