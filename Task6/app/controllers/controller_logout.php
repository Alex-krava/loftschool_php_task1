<?php

class Controller_Logout extends Controller {
    function __construct()
    {
        session_start();
        session_destroy();
        header('Location: /');
    }
}