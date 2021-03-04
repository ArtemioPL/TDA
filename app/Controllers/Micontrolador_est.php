<?php

namespace App\Controllers;
use App\Models\TareaModel;
class Micontrolador_est extends BaseController

{
	public function index()
	{
		
		
		echo view('superior');
		echo view('contenido');
		echo view('inferior');
	}

	public function listestu(){
        $db = \Config\Database::connect();
		$data = $db->query('SELECT id, nombres, apellidos, fechanac FROM estudiante');
$rows = $data->getResult();
$datos['rows'] = $rows;

		echo view('superior');
        echo view('listadoestu',$datos);
        echo view('inferior');
	}
    public function insertar(){
        echo view('superior');
        echo view('formularioestu');
        echo view('inferior');
    }
    public function guardar(){
        $db = \Config\Database::connect();
       $nombres = $this->request->getPost('nombres');
       $apellidos = $this->request->getPost('apellidos');
       $fechanac = $this->request->getPost('fechanac');
       $data = array(
            
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'fechanac'=>$fechanac,
        );
    $db->table('estudiante')->insert($data);
    
    return redirect()->to(base_url()."/estudiante");
      
    }
    public function borrar($id){
        $db = \Config\Database::connect();
        $db->table('estudiante')->delete(array('id' => $id));
        return redirect()->to(base_url()."/estudiante");
        
    }
    public function editar_ajax($id){
        $db = \Config\Database::connect();

        $query = $db->table('estudiante')->getWhere(array('id' => $id));
        
foreach ($query->getResult() as $row);

$data = array(
    'id'=>$row->id,
    'nombres'=>$row->nombres,
    'apellidos'=>$row->apellidos,
    'fechanac'=>$row->fechanac,
);
echo "Estudiante ".$id."<br><br>";
        //$this->load->view("docente/formulario_ajax",$row);
        //$data = $db->table('docente')->get(array('id' => $id));
        echo view('formulario_ajaxestu',$data);
        //echo $row->nombres;
        
    }
    public function guardar_editar($id){
        $db = \Config\Database::connect();
        $model=new TareaModel($db);
       //$id=$this->request->getPost('id');
       $nombres = $this->request->getPost('nombres');
       $apellidos = $this->request->getPost('apellidos');
       $fechanac = $this->request->getPost('fechanac');
       $data = [
        
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'fechanac'=>$fechanac,
       ];
       //echo $id;
      // echo "holi";
      //echo view('formulario_ajax');
      $db->table('estudiante')->where('id', $id)->update($data);
      //$model->update($id,$data);
      //return redirect()->to(base_url()."/inicio");
      //redirect("/Micontrolador/inicio");
      //$db->table('docente')->insert($data);
        /*$nombres = $this->input->post('nombres');
        $apellidos = $this->input->post('apellidos');
        $asignatura=$this->input->post('asignatura');

        $data = array(
            
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'asignatura'=>$asignatura,
        );
        $this->db->where('id',$id);
        $this->db->update('docente',$data);
  
        header("location:".base_url()."index.php/docente");*/
    }
}
