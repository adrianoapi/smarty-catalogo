<?php

/**
 * Example Application
 *
 * @package Example-application
 */
$titulo = "Livros da Natec Editora";
$array_livros = array(
    "Desenvolvendo com Laravel",
    "Entendendo Algoritmos",
    "Desenvolvendo para iPhone e iPad - 5ª edição",
    "Introdução à Orientação a Objetos com C++ e Python",
    "Laravel para ninjas"
);
$array_autores = array(
    "Matt Stauffer",
    "Aditya Y. Bhargava",
    "Ricardo Lecheta",
    "Orlando Saraiva Jr.",
    "Ademir C. Gabardo"
);

require '../libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->assign("titulo", $titulo);
$smarty->assign("livros", $array_livros);
$smarty->assign("autores", $array_autores);
$smarty->display("index.tpl");
