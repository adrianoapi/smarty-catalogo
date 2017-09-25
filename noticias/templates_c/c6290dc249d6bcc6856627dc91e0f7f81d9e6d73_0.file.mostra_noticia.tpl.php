<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 15:01:05
  from "C:\xampp\htdocs\smarty\noticias\templates\mostra_noticia.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c8fe11bfb8f2_03453487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6290dc249d6bcc6856627dc91e0f7f81d9e6d73' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\noticias\\templates\\mostra_noticia.tpl',
      1 => 1506344146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c8fe11bfb8f2_03453487 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1><br>
        <i><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value,"Data %d/%m/%Y Hora: %H:%M");?>
</i>
        <hr>
        <p><?php echo $_smarty_tpl->tpl_vars['texto']->value;?>
</p>
        <p align="center"><a href="javascript:history.back()">Voltar</a></p>
    </body>
</html><?php }
}
