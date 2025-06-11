<?php

namespace App\Controllers;

use App\Models\PaginaModel;
use App\Models\SeccionModel;
use App\Models\ComponenteModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PaginasController extends BaseController
{
    public function verPagina($slug = null)
    {
        // Instanciar los modelos una sola vez
        $paginaModel     = new PaginaModel();
        $seccionModel    = new SeccionModel();
        $componenteModel = new ComponenteModel();

        // 1. Buscar la página por slug y estado activo
        $pagina = $paginaModel
            ->where('slug', $slug)
            ->where('activo', 1)
            ->first();

        if (!$pagina) {
            // Si no existe, mostrar error 404
            throw PageNotFoundException::forPageNotFound();
        }

        // 2. Obtener las secciones activas y ordenadas de la página
        $secciones = $seccionModel
            ->where('pagina_id', $pagina['id'])
            ->where('activo', 1)
            ->orderBy('orden')
            ->findAll();

        // 3. Para cada sección, obtener sus componentes activos y ordenados
        foreach ($secciones as &$seccion) {
            $seccion['componentes'] = $componenteModel
                ->where('seccion_id', $seccion['id'])
                ->where('activo', 1)
                ->orderBy('orden')
                ->findAll();
        }
        unset($seccion); // Romper la referencia por seguridad

        // 4. Renderizar la vista con la data obtenida
        return view('layouts/paginas', [
            'pagina'    => $pagina,
            'secciones' => $secciones,
        ]);
    }

}
