<?php

class Controller {
    public $load;
    public $model;

    function __construct($pageURI) {
        $this->load = new Load();
        $this->model = new Model();

        //echo $pageURI;
        //$request = explode("/",$pageURI);
        $pageURI = strtok($pageURI,"?");
        
        

        //if (isset($_GET['id'])) {
            //echo gettype($_GET['id']);
        //} else {
            // Fallback behaviour goes here
        //}
        try {
            $this->$pageURI();
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    function home() {
        //$data = $this->model->dbGetJson();
        $this->load->view('home');
        // As a statement, I spent 4 hours trying to make this go through the model, instead of skipping.
        // You should have said it wasn't possible to call javascript after php because php loads last.
        // Or if there is a way you know how to make javascript and php interact nicely you should teach it in the module.
    }

    function modelView() {
        $data=$this->model->dbGetJson();
        $id=$_GET['id'];
        $this->load->view('modelView',$data,$id);
    }

    function variations() {
        $this->load->view('variations');
    }

    function statement() {
        $this->load->view('statement');
    }

// -----------------------------------

    function apiCreate() {

    }
    
    function apiRead() {
        //$data = $this->model->dbReadAll()
    }

    function apiUpdate() {

    }

    function apiDelete() {

    }
}


?>