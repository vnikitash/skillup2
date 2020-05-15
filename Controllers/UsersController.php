<?php

class UsersController
{
    public function index()
    {
        global $smarty;

        $smarty->assign('users', UserModel::all());
        $smarty->display('user.tpl');
    }

    public function create()
    {
        $email = $_POST['email'] ?? null;
        if (!$email){
            die("empty email");
        }

        $user = new UserModel();
        $user->setEmail($email)->save();
    }
}