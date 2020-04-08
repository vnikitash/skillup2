<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 18:07:57
  from '/app/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8e12fd24d570_07902382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0396b4ca9977abb398697611c6b73df89d9d80da' => 
    array (
      0 => '/app/templates/index.tpl',
      1 => 1586369250,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8e12fd24d570_07902382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8154312435e8e12fd0c3d37_94690837', 'main');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_8154312435e8e12fd0c3d37_94690837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_8154312435e8e12fd0c3d37_94690837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<table border="1" class="table">
    <thead>
        <th>test</th>
        <th>meta</th>
        <th>ololo</th>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['test'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</td>
                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['meta'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
</td>
                <td><?php ob_start();
echo $_smarty_tpl->tpl_vars['row']->value['ololo'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
</td>
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
