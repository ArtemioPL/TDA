<?php

namespace App\Controllers;
use App\Models\TareaModel;
class Micontrolador extends BaseController

{
	public function index()
	{
		
		
		echo view('superior');
		echo view('contenido');
		echo view('inferior');
	}

	public function listdoce(){
        $db = \Config\Database::connect();
		$data = $db->query('SELECT id, nombres, apellidos, asignatura FROM docente');
$rows = $data->getResult();
$datos['rows'] = $rows;
/*foreach ($rows as $row)
{
	echo $row->id;
    echo $row->nombres;
    echo $row->apellidos;
    echo $row->asignatura;
}

echo 'Total Results: ' . count($rows);
*/
		echo view('superior');
        echo view('listadodoce',$datos);
        echo view('inferior');
	}
    public function insertar(){
        echo view('superior');
        echo view('formulariodoce');
        echo view('inferior');
    }
    public function guardar(){
        $db = \Config\Database::connect();
       $nombres = $this->request->getPost('nombres');
       $apellidos = $this->request->getPost('apellidos');
       $asignatura = $this->request->getPost('asignatura');
       $data = array(
            
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'asignatura'=>$asignatura,
    );
    $db->table('docente')->insert($data);
    
    return redirect()->to(base_url()."/docente");
      /*  $nombres = $this->input->post('nombres');
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
    }
    public function borrar($id){
        $db = \Config\Database::connect();
        $db->table('docente')->delete(array('id' => $id));
        //$db->delete('docente',array('id' => $id));
       /* $this->db->where('id',$id);
    
        $this->db->delete('docente');
        //$this->db->delete('estudiante',array('id' => $id));
        header("location:".base_url()."index.php/docente");
        */
        return redirect()->to(base_url()."/docente");
    }
    public function editar_ajax($id){
        $db = \Config\Database::connect();

        $query = $db->table('docente')->getWhere(array('id' => $id));
        
foreach ($query->getResult() as $row);

$data = array(
    'id'=>$row->id,
    'nombres'=>$row->nombres,
    'apellidos'=>$row->apellidos,
    'asignatura'=>$row->asignatura,
);
echo "Docente ".$id."<br><br>";
        //$this->load->view("docente/formulario_ajax",$row);
        //$data = $db->table('docente')->get(array('id' => $id));
        echo view('formulario_ajax',$data);
        //echo $row->nombres;
        
    }
    public function guardar_editar($id){
        $db = \Config\Database::connect();
        $model=new TareaModel($db);
       //$id=$this->request->getPost('id');
       $nombres = $this->request->getPost('nombres');
       $apellidos = $this->request->getPost('apellidos');
       $asignatura = $this->request->getPost('asignatura');
       $data = [
        
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'asignatura'=>$asignatura,
       ];
       //echo $id;
      // echo "holi";
      //echo view('formulario_ajax');
      //$db->table('docente')->where('id', $id)->update($data);
      $model->update($id,$data);
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
