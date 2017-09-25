<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-25 15:01:46
  from "C:\xampp\htdocs\smarty\noticias\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59c8fe3a29a6d5_24022718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24dec6004c632d3a37662394e0912e4e70c71de5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\noticias\\templates\\index.tpl',
      1 => 1506344498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c8fe3a29a6d5_24022718 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    </head>
    <body>
        <div align="center">
            <table boErder="0" cellspacing="0" width="60%">
                <tr>
                    <td width="50%" bgcolor="#E8E8E8">
                        Últimas notícias
                    </td>
                    <td width="50%" bgcolor="#E8E8E8">
                        <p algin="right"><strong><?php echo smarty_modifier_date_format(time(),"%d/%m/%Y");?>
</strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="100%" colspan="2" bgcolor="#FBFBFB">
                        <br>
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['titulos']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <p>
                                <strong><u><?php echo $_smarty_tpl->tpl_vars['titulos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</u></strong>
                                <i>(<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)],"%d/%m/%Y %H:%M");?>
)</i><br>
                                <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['textos']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)],150);?>

                                [<a href="mostra_noticia.php?id=<?php echo $_smarty_tpl->tpl_vars['ids']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
">Leia mais</a>]
                            </p>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html><?php }
}
