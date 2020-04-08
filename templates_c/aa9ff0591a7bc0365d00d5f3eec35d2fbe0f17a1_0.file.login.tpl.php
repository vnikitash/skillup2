<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 17:38:14
  from '/app/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8e0c06200784_68504782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa9ff0591a7bc0365d00d5f3eec35d2fbe0f17a1' => 
    array (
      0 => '/app/templates/login.tpl',
      1 => 1586367492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8e0c06200784_68504782 (Smarty_Internal_Template $_smarty_tpl) {
?><h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h3>
<form action="/<?php ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" method="POST">
    <input type="text" name="login" placeholder="login"><br>
    <input type="password" name="pass" placeholder="password"><br>
    <input type="submit" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"><br>
</form><?php }
}
