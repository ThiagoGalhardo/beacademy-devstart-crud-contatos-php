<?php

include './head.php';
include './acoes.php';



$url = explode("?", $_SERVER["REQUEST_URI"]);

include 'telas/menu.php';

match ($url[0]) {

  "/" => home(),
  "/login" => login(),
  "/login" => login(),
  "/cadastro" => cadastro(),
  "/listar" => listar(),
  "/excluir" => excluir(),
  "/editar" => editar(),
  default => error404()
};

include './footer.php';