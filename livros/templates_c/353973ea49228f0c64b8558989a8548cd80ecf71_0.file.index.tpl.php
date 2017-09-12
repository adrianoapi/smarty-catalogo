<?php
/* Smarty version {Smarty::SMARTY_VERSION}, created on 2017-09-12 15:00:40
  from "C:\xampp\htdocs\smarty\livros\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-22',
  'unifunc' => 'content_59b7da78c6fd80_71201162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '353973ea49228f0c64b8558989a8548cd80ecf71' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\livros\\templates\\index.tpl',
      1 => 1505221238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b7da78c6fd80_71201162 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once 'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php';
?>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
    </head>
    <body>
        <h2 class="center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
        <table>
            <tr bgcolor="#FFFF00">
                <td>Livro</td>
                <td>Autor</td>
            </tr>
            <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['livros']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#d0d0d0"),$_smarty_tpl);?>
">
                    <td><?php echo $_smarty_tpl->tpl_vars['livros']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['autores']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)];?>
</td>
                </tr>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        </table>
    </body>
</html><?php }
}
