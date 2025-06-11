<style>
    .card {
    background: #fff;
    border-radius: 18px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.06);
    margin: 1.5rem auto;
    padding: 2rem;
    max-width: 420px;
    transition: box-shadow 0.2s;
    border: 1px solid #f2f2f2;
}
.card:hover {
    box-shadow: 0 8px 36px rgba(60,95,153,0.15);
}

.card-historia {
    border-left: 6px solid #007bff;
    padding-left: 1.5rem;
    position: relative;
}
.card-historia .anio {
    font-size: 2.2rem;
    font-weight: bold;
    color: #007bff;
    margin-bottom: .7rem;
}
.card-historia h3 {
    margin: .2rem 0 .6rem 0;
    font-size: 1.1rem;
    font-weight: 700;
}
.card-historia p {
    color: #444;
    font-size: 1rem;
}

.card-mvv h3 {
    color: #004ba0;
    font-size: 1.2rem;
    margin-bottom: .8rem;
    font-weight: 700;
    text-align: center;
}
.card-mvv p {
    color: #222;
    font-size: 1.07rem;
    text-align: center;
}

.card-equipo {
    display: flex;
    align-items: center;
    gap: 1.2rem;
    padding: 1.4rem 2rem;
    max-width: 370px;
}
.card-equipo img {
    width: 82px;
    height: 82px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #d1e4fa;
    background: #f5f8fa;
}
.card-equipo strong {
    display: block;
    font-size: 1.14rem;
    color: #2e3956;
    font-weight: 700;
    margin-bottom: .2rem;
}
.card-equipo span {
    color: #6487b1;
    font-size: .97rem;
    font-weight: 500;
}

</style>

<?php
switch ($datos['tipo_card']) {
    case 'historia':
        // Card tipo historia (línea de tiempo)
        ?>
        <div class="card card-historia">
            <h3><?= esc($datos['titulo']) ?></h3>
            <p><?= esc($datos['descripcion']) ?></p>
        </div>
        <?php
        break;

    case 'mision':
    case 'vision':
    case 'valores':
        // Card simple con título y descripción
        ?>
        <div class="card card-mvv">
            <h3><?= esc($datos['titulo']) ?></h3>
            <p><?= esc($datos['descripcion']) ?></p>
        </div>
        <?php
        break;

    case 'equipo':
        // Card de perfil de equipo
        ?>
        <div class="card card-equipo">
            <img src="<?= esc($datos['foto']) ?>" alt="<?= esc($datos['nombre']) ?>">
            <div>
                <strong><?= esc($datos['nombre']) ?></strong>
                <span><?= esc($datos['cargo']) ?></span>
            </div>
        </div>
        <?php
        break;
    // Puedes seguir agregando más tipos...
}
?>

