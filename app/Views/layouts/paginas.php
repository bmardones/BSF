<?php include(APPPATH . 'Views/layouts/header.php'); ?>

<div class="container">
    <h1><?= esc($pagina['titulo']) ?></h1>
    <?php foreach ($secciones as $seccion): ?>
    <section>
        <h2><?= esc($seccion['nombre']) ?></h2>
        <div class="d-flex">
            <?php foreach ($seccion['componentes'] as $componente): ?>
            <?php
            $datos = json_decode($componente['datos'], true);
            switch ($componente['tipo_componente']) {
                case 'card':
                    include(APPPATH . 'Views/componentes/card.php');
                    break;
                case 'banner':
                    include(APPPATH . 'Views/componentes/banner.php');
                    break;
                // Otros tipos...
            }
            ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endforeach; ?>
</div>

<?php include(APPPATH . 'Views/layouts/footer.php'); ?>