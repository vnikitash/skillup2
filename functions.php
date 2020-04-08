<?php
function getLoginView()
{
    global $smarty;

    $smarty->assign('type', 'Login');
    $smarty->assign('action', 'login');
    $smarty->display('form.tpl');
}

function getRegisterView()
{
    global $smarty;

    $smarty->assign('type', 'Register');
    $smarty->assign('action', 'register');
    $smarty->display('form.tpl');
}

function getDeafaultPage() {
    global $smarty;

    $smarty->assign('type', 'Register');
    $smarty->assign('action', 'register');
    $smarty->display('index.tpl');
}

