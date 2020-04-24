<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-24 16:25:44
  from '/app/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea31308b70682_51678226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cbfbb57a47e5865c7fda67b7376a73afc47a94f' => 
    array (
      0 => '/app/templates/layout.tpl',
      1 => 1587745541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5ea31308b70682_51678226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <?php echo '<script'; ?>
 src="jquery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="bootstrap.min.css">
    <?php echo '<script'; ?>
 src="bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17160250035ea31308b6f2d5_86018080', 'main');
?>

</div>
</body>
</html><?php }
/* {block 'main'} */
class Block_17160250035ea31308b6f2d5_86018080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_17160250035ea31308b6f2d5_86018080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
