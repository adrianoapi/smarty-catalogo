<?php

// ------ REQUEST ------
$id_noticia = $_GET['id'];
if (!is_numeric($id_noticia)) {
    echo "Notícia inválida.";
    exit();
}
// ------ CONEXÃO ------
$titulo = "Notícias";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "livros";

$con = new mysqli($servidor, $usuario, $senha, $banco);
$res = $con->query("SELECT titulo, texto, data_hora FROM noticias WHERE id=$id_noticia LIMIT 1");
$num_lines = $res->num_rows;

if ($num_lines > 0) {
    $dados = $res->fetch_array();
    $titulo = $dados['titulo'];
    $texto = $dados['texto'];
    $data = $dados['data_hora'];
}
$con->close();

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign('titulo', $titulo);
$smarty->assign('texto', $texto);
$smarty->assign('data', $data);
$smarty->display("mostra_noticia.tpl");
