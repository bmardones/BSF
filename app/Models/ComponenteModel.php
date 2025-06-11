<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponenteModel extends Model
{
    protected $table      = 'componentes';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'seccion_id', 'tipo_componente', 'datos', 'orden', 'activo', 'creado_en'
    ];

    public $useTimestamps = false;
}
