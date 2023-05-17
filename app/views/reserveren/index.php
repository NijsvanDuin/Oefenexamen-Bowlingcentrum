<?php require APPROOT . '/views/includes/head.php'; ?>
<h3><?= $data['title'] ?></h3>

<table>
    <thead>
        <th>Gereedschap Naam</th>
        <th>Aantal beschikbaar</th>
        <th>In Gebruik?</th>
    </thead>
    <tbody>
        <?= $data['records'] ?>
    </tbody>
</table>
<?php require APPROOT . '/views/includes/footer.php'; ?>