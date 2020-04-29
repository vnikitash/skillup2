<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 17:39:34
  from '/app/templates/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea9bbd6ec06c1_57901275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1833430b360d2ab52f1713cbbc919962f9194e44' => 
    array (
      0 => '/app/templates/cart.tpl',
      1 => 1588181974,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9bbd6ec06c1_57901275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2796209725ea9bbd6e4cfc2_35748765', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_2796209725ea9bbd6e4cfc2_35748765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_2796209725ea9bbd6e4cfc2_35748765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3>Cart</h3>

    <table class="table">
        <thead>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Count</th>
        <th>Product Total</th>
        <th>Remove</th>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartItems']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
$</td>
                <td>
                    <button class="btn btn-success  btn-xs">+</button>
                    <?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>

                    <button class="btn btn-danger btn-xs">-</button>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['product']->value['count']*$_smarty_tpl->tpl_vars['product']->value['price'];?>
$</td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remove
                    </button>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>

    <b>Total:</b> <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
$
<?php
}
}
/* {/block 'main'} */
}
