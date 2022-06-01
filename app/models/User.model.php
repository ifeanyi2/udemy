<?php 

class User{

    protected $table = "users";
    public $errors = [];

    public function validate($data){
        
        $this->errors = [];

        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "Firstname required!";
        }
        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "Lastname required!";
        }
        if (empty($data['username'])) {
            $this->errors['username'] = "Username required!";
        }
        if (empty($data['email'])) {
            $this->errors['email'] = "Email required!";
        }
        if (empty($data['password'])) {
            $this->errors['password'] = "Password required!";
        }
        if (@$data['password'] !== @$data['cpassword']) {
            $this->errors['cpassword'] = "Passwords does not match!";
        }
        if (empty($data['terms'])) {
            $this->errors['terms'] = "Accept terms and condition!";
        }

        if (empty($this->errors)) {

            return true;

        }

        return false;

    }
}