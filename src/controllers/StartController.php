<?php

require_once 'AppController.php';

class StartController extends AppController {

    public function index(){


        return $this->render("start");
    }

}