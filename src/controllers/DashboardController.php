<?php

require_once 'AppController.php';

class DashboardController extends AppController {

    public function index() {

        //TODO pobrać elementy na dashboard
        return $this->render("dashboard");
    }
}