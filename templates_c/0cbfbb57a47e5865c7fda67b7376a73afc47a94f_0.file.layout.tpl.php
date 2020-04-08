<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 18:27:45
  from '/app/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8e17a11d6d47_47033756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cbfbb57a47e5865c7fda67b7376a73afc47a94f' => 
    array (
      0 => '/app/templates/layout.tpl',
      1 => 1586370462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:header2.tpl' => 1,
  ),
),false)) {
function content_5e8e17a11d6d47_47033756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <?php echo '<script'; ?>
 src="jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="b.min.css">
    <link rel="stylesheet" href="b2.css">
    <?php echo '<script'; ?>
 src="bootstrap.js"><?php echo '</script'; ?>
>
</head>
<body>

<?php if (rand(1,2) == 2) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:header2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8276727305e8e17a11ceb76_62149100', 'main');
?>

</body>
</html><?php }
/* {block 'main'} */
class Block_8276727305e8e17a11ceb76_62149100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_8276727305e8e17a11ceb76_62149100',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
