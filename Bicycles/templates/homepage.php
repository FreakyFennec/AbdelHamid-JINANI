<?php $title = 'Bicycles'; ?>

<?php $title_site = 'Bicycles'; ?>

<?php ob_start(); ?>

<h2 class="title_section"></h2>

<h3 class="title_article">Les fabricants</h3>
<?php               
$prev_country = null;
foreach ($bikeProducers as $bikeProducer)
{
    if ($bikeProducer['pays_nom'] !== $prev_country) {
        $prev_country = $bikeProducer['pays_nom'];
    ?>
    <h4><?= htmlspecialchars($prev_country); ?>
<?php
    }
?>

<article>
    <img src="public/img/favicons/<?= htmlspecialchars(($bikeProducer['logo_constr'])); ?>" alt="<?= htmlspecialchars(($bikeProducer['alt_logo_constr'])); ?>" />
                        
    <?= htmlspecialchars($bikeProducer['constr_velos_nom']); ?><br />
    <em><a href="index.php?action=bikes_models&id=<?= urlencode($bikeProducer['identifier']) ?>">Voir</a></em>
</article>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require ('layout.php');
?>