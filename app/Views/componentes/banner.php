<div class="banner">
    <?php if (!empty($datos['imagen'])): ?>
        <img src="<?= esc($datos['imagen']) ?>" alt="<?= esc($datos['titulo'] ?? '') ?>">
    <?php endif; ?>
    <div class="banner-content">
        <h2><?= esc($datos['titulo'] ?? '') ?></h2>
        <p><?= esc($datos['descripcion'] ?? '') ?></p>
        <?php if (!empty($datos['link'])): ?>
            <a href="<?= esc($datos['link']) ?>" class="btn btn-secondary">Ver más</a>
        <?php endif; ?>
    </div>
</div>
