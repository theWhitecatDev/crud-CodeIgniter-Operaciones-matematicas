<?php

if(!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_main extends CI_Model{
    private $table='operaciones';

    function __construct(){
        parent::__construct();
    }
    function consulta(){
        $this->db->select("id, numero1, numero2, resultado, operacion");
        $this->db->from($this->table);
        return $this->db->get()->result();
    }

    function insertar($arreglo){
        $this->db->insert($this->table, $arreglo);
    }

    function consultarFila($id){
        $this->db->select("id, numero1, operacion, numero2, resultado");
        $this->db->from($this->table);
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }  

    function actualizar($arreglo){
        $this->db->set($arreglo);
        $this->db->where('id', $arreglo["id"]);
        $this->db->update($this->table);
    }

    function eliminar($id){
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }
}
