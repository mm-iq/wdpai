<?php

require_once 'AppController.php';

class SecurityController extends AppController {

    public function login() {

        // Sprawdzamy, czy żądanie jest metodą GET
        // czyli czy użytkownik otworzył stronę logowania
        if($this->isGet()){
            // zwracamy mu widok formularza logowania i kończymy działanie metody
            return $this->render("login");
            //$this->render("login", ["name"=> "Jan"]);
        }

        // jeśli nie spełnia warunku this->isGet()
        // to poniżej mamy kod dla $this->isPost()

        // Pobieramy dane z tablicy $_POST i przypisujemy do zmiennych
        // ?? '' jeśli są puste to przypisujemy pusty ciąg znaków
        $email = $_POST["email"] ?? '';
        $password = $_POST["password"] ?? '';

        // var_dump uzywamy do szybkiego wyświetlenia zawartości zmiennych w celach debugowania
        var_dump($email, $password);
        // TODO get data from database

        // wyrenderowanie widoku
        return $this->render("dashboard");
    }

    public function register() {
        // TODO pobranie z formularza email i hasła
        // TODO insert do bazy danych
        // TODO zwrocenie informacji o pomyslnym zarejstrowaniu
        
        if($this->isGet()){
            return $this->render("register");
        }

        $email = $_POST["email"] ?? "";
        $password1 = $_POST["password1"] ?? '';
        $password2 = $_POST["password2"] ?? '';
        $firstname = $_POST["firstname"] ?? '';
        $lastname = $_POST["lastname"] ?? '';
        
        // TODO insert to database user
        // sprawdź czy hasła są takie same

        return $this->render("login", ["message" => "Zarejestrowano uzytkownika"]);
    }
}