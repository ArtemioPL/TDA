<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$db = \Config\Database::connect();
		$data = $db->query('SELECT id, nombres, apellidos FROM docente');
$rows = $data->getResult();
$datos['rows'] = $rows;
foreach ($rows as $row)
{
	echo $row->id;
    echo $row->nombres;
    echo $row->apellidos;
}

echo 'Total Results: ' . count($rows);
		
		echo view('superior');
		echo view('listadodoce',$datos);
		echo view('inferior');
	}

	public function holi(){
		echo view('superior');
	}
	public function guardar(){
        
   
		/*
		 $nombres = $this->input->post('nombres');
		 $apellidos = $this->input->post('apellidos');
		 $asignatura=$this->input->post('asignatura');
 
		 $data = array(
			 
			 'nombres'=>$nombres,
			 'apellidos'=>$apellidos,
			 'asignatura'=>$asignatura,
		 );
		 $this->db->insert('docente',$data);
   
	   header("location:".base_url()."index.php/docente");
		 */
		 header("location:".base_url()."/inicio");
	 }
}
