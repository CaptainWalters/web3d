<?php

class Controller {
    public $load;
    public $model;

    function __construct($pageURI) {
        $this->load = new Load();
        $this->model = new Model();

        $this->$pageURI();
    }

    function home() {
        //$data = $this->model->dbGetJson();
        $this->load->view('home');
        // As a statement, I spent 4 hours trying to make this go through the model, instead of skipping.
        // You should have said it wasn't possible to call javascript after php because php loads last.
        // Or if there is a way you know how to make javascript and php interact nicely you should teach it in the module.
    }

    function modelView() {
        $this->load->view('modelView');
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