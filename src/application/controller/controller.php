<?php

class Controller {
    public $load;
    public $model;

    function __construct() {
        $this->load = new Load();
        $this->model = new Model();
    }
            
    function parsePageURI ($pageURI = null) {
        $function = strtok($pageURI,"?");
        $id = strtok("?");
        $this->$function($id);
    }
    
    function home() {
        $this->load->view('home', $this);
    }
    
    function modelView($id) {
        $data=$this->model->dbGetJson();
        if (!empty($id)) {
            //$id=$_GET['id'];
            $id = substr($id, 3);
            $this->load->view('modelView',$data,$id);
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

?>
