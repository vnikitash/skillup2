<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 15:15:47
  from '/app/templates/admin/categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea99a23079e47_27084078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36c5661fee2cff0b7681cb432cbb2e4eb7d68bdd' => 
    array (
      0 => '/app/templates/admin/categories.tpl',
      1 => 1588173345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea99a23079e47_27084078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10624046515ea99a23079459_50597839', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_10624046515ea99a23079459_50597839 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_10624046515ea99a23079459_50597839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Admin Categories</h3>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Ordering</th>
            <th>Products</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
        <tr>
            <form action="" method="POST">
            <td>1</td>
            <td><input type="text" placeholder="name" value="Phones" class="form-control" name="name"></td>
            <td><input type="number" placeholder="order" value="1" class="form-control" name="order"></td>
            <td>1</td>
            <td><input type="submit" class="btn btn-warning" value="Update"></td>
            </form>
            <form action="" method="POST">
                <td><input type="submit" class="btn btn-danger" value="Remove"></td>
            </form>

        </tr>
        </tbody>
    </table>
<?php
}
}
/* {/block 'main'} */
}
