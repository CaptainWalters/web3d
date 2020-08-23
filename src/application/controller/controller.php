<?php

class Controller {
    public $load;
    public $model;

    function __construct() {
        $this->load = new Load();
        $this->model = new Model();
    }
            
    function parsePageURI ($pageURI = null) {
        $action = strtok($pageURI,"&");
        if (method_exists($this, $action)) {
            $this->$action();
        } else {
            $this->home();
        }
    }
    
    function home() {
        $this->load->view('home', $this);
    }
    
    function modelview() {
        $data=$this->model->dbGetJson();
        if (isset($_GET['id'])) {
            $this->load->view('modelView',$data,$_GET['id']);
        } else {
            $this->load->view('modelView',$data,0);
        }
    }

    function variations() {
        $this->load->view('variations');
    }

    function statement() {
        $this->load->view('statement');
    }
   
}
