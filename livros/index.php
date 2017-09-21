<?php

/**
 * Example Application
 *
 * @package Example-application
 */
$titulo = "Livros da Natec Editora";
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "livros";

$con = new mysqli($servidor, $usuario, $senha, $banco);
$res = $con->query("SELECT titulo, autor FROM livros ORDER BY titulo");
$num_lines = $res->num_rows;

for ($i = 0; $i < $num_lines; $i++) {
    $dados = $res->fetch_row();
    $array_livros[] = $dados[0];
    $array_autores[] = $dados[1];
}
$con->close();

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("livros", $array_livros);
$smarty->assign("autores", $array_autores);
$smarty->display("index.tpl");
