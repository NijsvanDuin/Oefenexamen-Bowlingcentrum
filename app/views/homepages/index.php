<?php require APPROOT . '/views/includes/head.php'; ?>
<p>
<h3><?= $data["title"]; ?></h3>
</p>
<a href="<?= URLROOT; ?>/students/index">Lessen student</a> |
<a href="<?= URLROOT; ?>/students/annuleerLes">Lessen Annuleren</a> |
<a href="<?= URLROOT; ?>/instructeur/index">Instructeurs in dienst</a> |
<a href="<?= URLROOT; ?>/bestellen/index">Bowling centrum Bestellen</a> |
<a href="<?= URLROOT; ?>/contacten/index">Bowling centrum Overzicht Klanten</a> |

<?php require APPROOT . '/views/includes/footer.php'; ?>