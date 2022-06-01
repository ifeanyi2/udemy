<?php


class Signup extends Controller
{

    public function index()
    {


        //dd($_POST);

        // we will still change how this is used wit a function
        $user = new User();
        if($user->validate($_POST)){
            $query = "INSERT INTO users(firstname,lastname,othernames,username,email,password,role) VALUES(:firstname,:lastname,:othernames,:username,:email,:password,:role)";

            $data['firstname'] = $_POST['firstname'];
            $data['lastname'] = $_POST['lastname'];
            $data['othernames'] = $_POST['othernames'];
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['role'] = 'user';

            $db = new Database();
            $db->query($query, $data);


        }
      

        $data['title'] = 'Signup';

        $this->view('signup', $data);


    }
}
