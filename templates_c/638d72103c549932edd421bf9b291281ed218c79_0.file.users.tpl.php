<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 18:52:37
  from '/app/templates/admin/users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea9ccf5165978_29074385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '638d72103c549932edd421bf9b291281ed218c79' => 
    array (
      0 => '/app/templates/admin/users.tpl',
      1 => 1588186355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9ccf5165978_29074385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20267763455ea9ccf50f0636_78973801', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_20267763455ea9ccf50f0636_78973801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20267763455ea9ccf50f0636_78973801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Admin Users:</h3>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Email</th>
        <th>Orders</th>
        <th>Admin</th>
        <th>Created</th>
        <th>Update</th>
        <th>Delete</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
            <tr>
                <form action="/admin/users/update" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
                    <td><input type="text" placeholder="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
" class="form-control" name="email"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['orders_count'];?>
</td>
                    <td><input type="checkbox" name="admin" <?php if ($_smarty_tpl->tpl_vars['user']->value['is_admin']) {?>checked<?php }?>></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
                    <td><input type="submit" class="btn btn-warning" value="Update"></td>
                </form>
                <form action="" method="POST">
                    <td><input type="submit" class="btn btn-danger" value="Remove"></td>
                </form>

            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
<?php
}
}
/* {/block 'main'} */
}
