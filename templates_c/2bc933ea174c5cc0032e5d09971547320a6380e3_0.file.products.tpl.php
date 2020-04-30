<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-30 16:36:18
  from '/app/templates/admin/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaafe8210cb14_22294892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bc933ea174c5cc0032e5d09971547320a6380e3' => 
    array (
      0 => '/app/templates/admin/products.tpl',
      1 => 1588264565,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaafe8210cb14_22294892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20497667215eaafe82079640_51603171', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_20497667215eaafe82079640_51603171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_20497667215eaafe82079640_51603171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Admin Products</h3>
    <form action="/admin/products/create" enctype="multipart/form-data" method="POST">
        <input type="text" placeholder="name" class="form-control" name="name">
        <input type="text" placeholder="price int $" class="form-control" name="price">
        <select name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="file" class="form-control" name="image">
        <input type="submit" class="btn btn-success" value="Create product">
    </form>
    <br>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Photo</th>
            <th>Name</th>
            <th>Price</th>
            <th>Order</th>
            <th>Category</th>
            <th>Update</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <tr>
                <form action="" method="POST">
                    <td>1</td>
                    <td><img style="width: 80px;" src="https://st2.depositphotos.com/3904951/8925/v/450/depositphotos_89250312-stock-illustration-photo-picture-web-icon-in.jpg" alt="..."></td>
                    <td><input type="text" placeholder="name" value="iPhone 3gs" class="form-control" name="name"></td>
                    <td><input type="number" placeholder="price" value="100$" class="form-control" name="price"></td>
                    <td><input type="number" placeholder="order" value="1" class="form-control" name="order"></td>
                    <td>?????</td>
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
