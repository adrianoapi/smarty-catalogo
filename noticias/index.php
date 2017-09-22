<?php

$titulo = "Notícias";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "livros";

$con = new mysqli($servidor, $usuario, $senha, $banco);
$res = $con->query("SELECT * FROM noticias ORDER BY data_hora LIMIT 3");
$num_lines = $res->num_rows;

for ($i = 0; $i < $num_lines; $i++) {
    $dados = $res->fetch_array();
    $array_ids[] = $dados['id'];
    $array_titulos[] = $dados['titulo'];
    $array_textos[] = $dados['texto'];
    $array_datas[] = $dados['data_hora'];
}
$con->close();

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('title',$titulo);
$smarty->assign('ids', $array_ids);
$smarty->assign('titulos', $array_titulos);
$smarty->assign('textos', $array_textos);
$smarty->assign('datas', $array_datas);
$smarty->display("index.tpl");
