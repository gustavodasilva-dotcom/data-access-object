<?php 

require_once('config.php');

/**
 * $sql = new Sql();
 *
 * $usuarios = $sql->select("SELECT * FROM tb_usuario");
 * 
 * echo json_encode($usuarios);
 */

$usuario = new Usuario();

$usuario->loadById(5);

echo $usuario;

?>