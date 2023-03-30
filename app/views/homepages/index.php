<?php require APPROOT . '/views/includes/head.php'; ?>
<p>
<h3><?= $data["title"]; ?></h3>
</p>
<a href="<?= URLROOT; ?>/ContactController/index">Contactgegevens</a>
<a href="<?= URLROOT;?>/Reservations/index">Overzicht reserveringen 1</a>
<a href="<?= URLROOT;?>/Reservations/reservations">Overzicht reserveringen 2</a>

<?php require APPROOT . '/views/includes/footer.php'; ?>
