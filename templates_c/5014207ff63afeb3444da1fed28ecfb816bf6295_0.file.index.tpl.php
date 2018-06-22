<?php
/* Smarty version 3.1.32, created on 2018-06-19 09:37:57
  from '/Applications/MAMP/htdocs/smartytest/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b28b2d52160a4_78663522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5014207ff63afeb3444da1fed28ecfb816bf6295' => 
    array (
      0 => '/Applications/MAMP/htdocs/smartytest/index.tpl',
      1 => 1529393876,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b28b2d52160a4_78663522 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<body>
<h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
        <div class="tweet">
        <h2><?php echo $_smarty_tpl->tpl_vars['blog']->value['titel'];?>
</h2>
        <h3><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['blog']->value['text'];?>
</p>
</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
