<?php
namespace App\Models;
use CodeIgniter\Model;
class TareaModel extends Model{

    protected $table      = 'docente';
    protected $primaryKey = 'id';


    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombres', 'apellidos','asignatura'];
}