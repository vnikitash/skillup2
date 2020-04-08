<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-08 18:13:04
  from '/app/templates/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8e143094cb35_45453337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e11d61140f8ba634d7f9bf46c98e58d2bddadf8f' => 
    array (
      0 => '/app/templates/form.tpl',
      1 => 1586369471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8e143094cb35_45453337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1004541085e8e14308ebd01_24693745', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block 'main'} */
class Block_1004541085e8e14308ebd01_24693745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1004541085e8e14308ebd01_24693745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3><?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</h3>
    <form action="/<?php ob_start();
echo $_smarty_tpl->tpl_vars['action']->value;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" method="POST" style="width: 300px">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <input type="submit" class="btn btn-primary" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['type']->value;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"><br>
    </form>
<?php
}
}
/* {/block 'main'} */
}
