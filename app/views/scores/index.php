<?php
require APPROOT  . '/views/includes/head.php';
?>
<h3><u><?= $data['title']; ?></u></h3><br>

<table border=1>
    <a href="<?= URLROOT; ?>/score/addScores">toevoegen</a>
    <thead>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Score</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>
<a href="<?= URLROOT; ?>/homepages/index">home</a>

<?php require APPROOT  . '/views/includes/footer.php'; ?>