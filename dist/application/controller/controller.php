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
        $data = $this->model->dbGetJson();
        $this->load->view('home', $data);
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