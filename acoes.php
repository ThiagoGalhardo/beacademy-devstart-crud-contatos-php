<?php

function home()
{
  include "./views/home.php";
}

function login()
{

  if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $mensagem = "Que pena! Esse recurso ainda não foi implementado!";

    include "./views/mensagem_error.php";
  }



  include "./views/login.php";
}

function cadastro()
{


  if ($_POST) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $contatos = fopen("./data/contatos.csv", "a+");

    fwrite($contatos, $name . "," . $lastName . "," . $email . "," . $phone . PHP_EOL);

    fclose($contatos);

    $mensagem = "Cadastro realizado com sucesso!";

    include "./views/mensagem.php";
  }


  include "./views/cadastro.php";
}

function listar()
{
  $contatos = file('./data/contatos.csv');
  include "./views/listar.php";
}

function error404()
{
  include "./views/404.php";
}


function excluir()
{
  $id = $_GET["id"];

  $contatos = file('./data/contatos.csv');

  unset($contatos[$id]);

  unlink("./data/contatos.csv");

  $arquivo = fopen("./data/contatos.csv", "a+");

  foreach ($contatos as $cadaContato) {
    fwrite($arquivo, $cadaContato);
  }

  fclose($arquivo);

  $mensagem = "Contato excluído com sucesso!";
  include "./views/mensagem.php";
}

function editar()
{

  $id = $_GET["id"];

  $contatos = file("./data/contatos.csv");

  $dados = explode(",",  $contatos[$id]);

  if ($_POST) {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $contatos[$id] = "{$name},{$lastName},{$email},{$phone}" . PHP_EOL;

    unlink("./data/contatos.csv");

    $arquivo = fopen("./data/contatos.csv", "a+");

    foreach ($contatos as $cadaContato) {
      fwrite($arquivo, $cadaContato);
    }

    fclose($arquivo);

    $mensagem = "Contato atualizado com sucesso!";
    include "./views/mensagem.php";
  }

  include "./views/editar.php";
}