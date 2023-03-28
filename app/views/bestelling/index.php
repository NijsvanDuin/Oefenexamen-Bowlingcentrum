<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<button><a href="<?= URLROOT; ?>/bestellen/create">Nieuwe bestelling</a></button>
<br><br>
<table>
    <thead>
        <th>Package Naam</th>
        <th>Track Code</th>
        <th>Tijd Reservatie</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($data["bestellingen"] as $bestelling) : ?>
            <tr>
                <td><?= $bestelling->name ?></td>
                <td><?= $bestelling->code ?></td>
                <td><?= $bestelling->time_reservation ?></td>
                <td><a href='/bestellen/update/<?= $bestelling->reservation_id ?>/<?= $bestelling->option_id ?>'>update</a></td>
                <td><a href='/bestellen/delete/<?= $bestelling->reservation_id ?>/<?= $bestelling->option_id ?>'>delete</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php require APPROOT . '/views/includes/footer.php'; ?>