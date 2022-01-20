<?php
/*
Nombre: AlcarazGarcia Gabriel.

Descripción: Este model obtiene los registros de la tabla y las subcategorias
que se encuentran con esa categoria.

Fecha: 3 de enero del 2018.

Código:*/
defined('BASEPATH') OR exit('No direct script access allowed');
//El nombre del controlador debe ser igual al del archivo pero con mayuscula
class BuscProgramas extends CI_Model {
    function __construct(){
      parent:: __construct();
      // se carga la base de datos
      $this -> load -> database();

    }

//obtiene todos los registros de la tabla
    public function getAll(){
      $respuesta = array ();
      $query = $this -> db -> query ("SELECT * FROM `tbl_Lenguaje`");
      if ($query->num_rows () > 0) {
      foreach ( $query->result () as $row ) {
        $respuesta [] = $row;
      }
    }
    // print_r($respuesta);
    // exit;
    return $respuesta;
    }

//recibe la categoria y busca en la tabla subcategoria las subcategorias que tienen esa categoria
    public function GetSubcategoria($categoria){
      $respuesta = array ();
      $query = $this -> db -> query ("SELECT * FROM `subcategoria` WHERE `idcat_sub` =" .$categoria  );
      if ($query->num_rows () > 0) {
      foreach ( $query->result () as $row ) {
        $respuesta [] = $row;
      }
    }
    return $respuesta;

    }
  }
