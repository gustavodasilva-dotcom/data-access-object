<?php 

require_once('config.php');

/**
 * SELECTING ALL USERS USING 'select()' METHOD
 * 
 * $sql = new Sql();
 *
 * $usuarios = $sql->select("SELECT * FROM tb_usuario");
 * 
 * echo json_encode($usuarios);
 */

/**
 * SELECTING A SPECIFIC USER USING THE USER'S ID IN 'loadById()'
 * 
 * $usuario = new Usuario();
 * 
 * $usuario->loadById(5);
 */

/**
 * LISTING ALL THE USERS WITH 'getList()'
 * 
 * $lista = $usuario::getList();
 *
 * echo $usuario;
 *
 * echo json_encode($lista);
 */

/** 
 * SEARCHING FOR A SPECIFIC USER USING THE USER'S NAME
 * 
 * $search = Usuario::search("jo");
 *
 * echo json_encode($search);
 */

/**
 * SEARCHING FOR A SPECIFIC USER USING THE USER'S LOGIN AND PASSWORD
 * 
 * $usuario = new Usuario();
 * 
 * $usuario->login("jose_dasilva", "jose_jose123");
 * 
 * echo $usuario;
 */



?>