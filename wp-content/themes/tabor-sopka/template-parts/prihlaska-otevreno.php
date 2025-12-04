<?php

$rezim = isset($args['rezim']) ? $args['rezim'] : 'otevrena';
$nahradnici = ($rezim === 'nahradnici');
?>

<section class="prihlaska-otevreno">
    <header class="prihlaska-header">
        <?php if ($nahradnici): ?> 
            <h1>Přihláška dítěte - náhradník</h1>
            <p class="nahradnici-info">
                Kapacita tábora je naplněna na 100%. Tato přihláška je určena pro děti, které se chtějí zapsat na náhradnický seznam tábora. V případě uvolnění místa vás budeme kontaktovat.</p>
            </p>
        <?php else: ?>
            <h1>Přihláška dítěte</h1>
            <p class="otevrena-info">
                Vyplněním této přihlášky závazně přihlašujete své dítě na tábor. Po odeslání přihlášky vám přijde potvrzovací e-mail o přijetí přihlášky.
            </p>
        <?php endif; ?>
    </header>

    <?php //meta data - termín, cena atd.? ?>

    <?php //form přihlášky ?>