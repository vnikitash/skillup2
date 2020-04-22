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

function getDefaultPage()
{
    global $smarty;

    $data = [];

    for ($i = 0; $i < 100; $i++) {
        $data[] = [
            'test' => 'test '. $i,
            'meta' => 'meta ' . $i,
            'ololo' => rand(1,100)
        ];
    }

    $smarty->assign('data', $data);
    $smarty->display('index.tpl');
}

