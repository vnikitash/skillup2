<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-30 17:10:48
  from '/app/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eab069827f531_97763948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0396b4ca9977abb398697611c6b73df89d9d80da' => 
    array (
      0 => '/app/templates/index.tpl',
      1 => 1588266574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eab069827f531_97763948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9962644465eab06981719b5_86380486', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_9962644465eab06981719b5_86380486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_9962644465eab06981719b5_86380486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                <li role="presentation" <?php if (((($tmp = @$_GET['category_id'])===null||$tmp==='' ? 0 : $tmp)) == 0) {?>class="active"<?php }?>>
                    <a href="/">All</a>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                    <li role="presentation" <?php if (((($tmp = @$_GET['category_id'])===null||$tmp==='' ? 0 : $tmp)) == $_smarty_tpl->tpl_vars['category']->value['id']) {?>class="active"<?php }?>>
                        <a href="?category_id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="/product_images/<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
" alt="...">
                        <div class="caption">
                            <h5><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h5>
                            <p>Price <?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
$</p>
                            <p>Category <?php echo $_smarty_tpl->tpl_vars['product']->value['category_id'];?>
</p>
                            <p>
                                <form action="/cart/add" method="POST">
                                    <input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                    <input type="submit" value="Buy!" class="btn btn-success">
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

            <nav aria-label="Page navigation" style="text-align: center;">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= ceil($_smarty_tpl->tpl_vars['count']->value/$_smarty_tpl->tpl_vars['perPage']->value)) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= ceil($_smarty_tpl->tpl_vars['count']->value/$_smarty_tpl->tpl_vars['perPage']->value); $_smarty_tpl->tpl_vars['i']->value++) {
?>
                        <?php if (((($tmp = @$_GET['category_id'])===null||$tmp==='' ? 0 : $tmp))) {?>
                            <li  class="<?php if (((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)) == $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
&category_id=<?php echo $_GET['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                            <?php } else { ?>
                            <li  class="<?php if (((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)) == $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>"><a href="?page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                        <?php }?>

                    <?php }
}
?>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
<?php
}
}
/* {/block 'main'} */
}
