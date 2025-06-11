<?php

namespace App\Models;

use CodeIgniter\Model;

class SeccionModel extends Model
{
    protected $table      = 'secciones';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'pagina_id', 'nombre', 'tipo_seccion', 'orden', 'activo', 'creado_en'
    ];

    public $useTimestamps = false;
}
