<?php

namespace App\Models;

use CodeIgniter\Model;

class PaginaModel extends Model
{
    protected $table      = 'paginas';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'slug', 'titulo', 'seo_title', 'seo_description', 'activo', 'creado_en'
    ];

    // Opcional: Si quieres usar timestamps automáticos
    public $useTimestamps = false;
}
