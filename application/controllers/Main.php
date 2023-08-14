<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_main');
	}

	public function index()
	{
		$r = $this->model_main->consulta();

		$data["r"] = $r;

		$this->load->view('index', $data);
	}

	public function crear()
	{
		$data["accion"] = "http://localhost/crudcodelgniter/index.php/main/save/";
		$data["numero1"] = '';
		$data["operacion"] = '';
		$data["numero2"] = '';
		$data["resultado"] = '';
		$this->load->view('formulario', $data);
	}

	public function save()
	{
		$n1 = $this->input->post('numero1');
		$op = $this->input->post('operacion');
		$n2 = $this->input->post('numero2');

		if ($op === "+") {
			$resul = $n1 + $n2;
		} elseif ($op === "-") {
			$resul = $n1 - $n2;
		} elseif ($op === "*") {
			$resul = $n1 * $n2;
		} elseif ($op === "/") {
			$resul = $n1 / $n2;
		} else {
			echo "Signo no válido";
			exit;
		}

		$arreglo = array(
			"numero1" => $n1,
			"operacion" => $op,
			"numero2" => $n2,
			"resultado" => $resul,
		);
		$r = $this->model_main->insertar($arreglo);
		redirect('/', 'refresh');
	}

	public function editar($id)
	{
		$data["accion"] = "http://localhost/crudcodelgniter/index.php/main/update/$id";
		$c = $this->model_main->consultarFila($id);
		$data["numero1"] = $c->numero1;
		$data["operacion"] = $c->operacion;
		$data["numero2"] = $c->numero2;
		$this->load->view('formulario', $data);
	}

	public function update($id)
	{
		$n1 = $this->input->post('numero1');
		$op = $this->input->post('operacion');
		$n2 = $this->input->post('numero2');

		if ($op === "+") {
			$resul = $n1 + $n2;
		} elseif ($op === "-") {
			$resul = $n1 - $n2;
		} elseif ($op === "*") {
			$resul = $n1 * $n2;
		} elseif ($op === "/") {
			$resul = $n1 / $n2;
		} else {
			echo "Signo no válido";
			exit;
		}

		$arreglo = array(
			"id" => $id,
			"numero1" => $n1,
			"operacion" => $op,
			"numero2" => $n2,
			"resultado" => $resul,
		);
		$r = $this->model_main->actualizar($arreglo);
		redirect('/', 'refresh');
	}

	public function eliminar($id)
	{
		$data["accion"] = "http://localhost/crudcodelgniter/index.php/main/delete/$id";
		$c = $this->model_main->consultarFila($id);
		$data["numero1"] = $c->numero1;
		$data["operacion"] = $c->operacion;
		$data["numero2"] = $c->numero2;
		$this->load->view('eliminar', $data);
	}

	public function delete($id)
	{
		$r = $this->model_main->eliminar($id);
		redirect('/', 'refresh');
	}
}
