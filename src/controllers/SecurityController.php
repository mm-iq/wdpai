<?php

require_once 'AppController.php';

class SecurityController extends AppController {

    public function login() {

        //TODO

        //$this->render("login", ["name"=> "Jan"]);
        return $this->render("login");
    }

    public function register() {
        //TODO
        return $this->render("login", ["message" => "Zarejestrowano uzytkownika"]);
    }
}