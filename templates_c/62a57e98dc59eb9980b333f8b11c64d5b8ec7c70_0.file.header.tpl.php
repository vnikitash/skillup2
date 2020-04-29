<?php
/* Smarty version 3.1.34-dev-7, created on 2020-04-29 17:47:27
  from '/app/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ea9bdaf56d662_67129247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62a57e98dc59eb9980b333f8b11c64d5b8ec7c70' => 
    array (
      0 => '/app/templates/header.tpl',
      1 => 1588182445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea9bdaf56d662_67129247 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">MyShop</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-left">
                <?php if ((($tmp = @$_SESSION['user']['is_admin'])===null||$tmp==='' ? 0 : $tmp) == 1) {?>
                <li><a href="/admin">Admin Categories</a></li>
                <li><a href="/admin/products">Admin Products</a></li>
                <li><a href="/admin/users">Admin Users</a></li>
                <li><a href="/admin/orders">Admin Orders</a></li>
                <?php }?>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cart">Cart (<?php echo $_smarty_tpl->tpl_vars['cart_count']->value;?>
)</a></li>
                <?php if (!isset($_SESSION['user'])) {?>
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <?php } else { ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['user']['email'];?>
<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </li>
                <?php }?>



            </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
</nav><?php }
}
