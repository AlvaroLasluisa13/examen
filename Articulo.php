<?php
class Articulo extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  function insertar($datos){
  return $this->db->insert('articulos',$datos);
  }
  function obtenerTodos(){
    $listadoArticulos=$this->db->get('articulos');
    if ($listadoArticulos->num_rows()>0) {
      return $listadoArticulos->result();
    }else {
      return false;
    }
  }
  function borrar($id_art){
    $this->db->where("id_art",$id_art);
    if ($this->db->delete("articulos")) {
      return true;
    } else {
      return false;
    }
  }
  function obtenerPorId($id){
    $this->db->where("id_art",$id);
    $articulos=$this->db->get("articulos");
    if($articulos->num_rows()>0){
      return $articulos->row();
    }
      return false;
  }
  function actualizar($id,$datos){
      $this->db->where("id_art",$id);
      return $this->db->update("articulos",$datos);
  }
}
 ?>
