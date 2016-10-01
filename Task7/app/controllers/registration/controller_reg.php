<?php

class Controller_Reg extends Controller {

    private $email;
    private $password;
    private $passwordConfirm;

    function __construct(Array $data)
    {
        $this->email = isset($data['email']) ? $data['email'] : null;
        $this->password = isset($data['password']) ? $data['password'] : null;
        $this->passwordConfirm = isset($data['passwordConfirm']) ? $data['passwordConfirm'] : null;
    }

    public function validate()
    {
        return !empty($this->email) && !empty($this->password);
    }

    public function validatePass()
    {
        return !empty($this->password) && !empty($this->passwordConfirm);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPasswordConfirm()
    {
        return $this->passwordConfirm;
    }

    public function setPasswordConfirm($passwordConfirm)
    {
        $this->passwordConfirm = $passwordConfirm;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}