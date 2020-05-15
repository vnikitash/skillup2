<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-15 18:15:06
  from '/app/Views/user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ebedc2ad02e24_99908810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '358f78f1f76810af32bb9bfa1c3d986999fdec0d' => 
    array (
      0 => '/app/Views/user.tpl',
      1 => 1589566431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ebedc2ad02e24_99908810 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table border="1">
    <thead>
        <th>ID</th>
        <th>Email</th>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
