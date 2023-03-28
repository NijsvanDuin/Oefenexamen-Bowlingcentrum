<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?>
<table>
    <thead>
        <th>Package Naam</th>
        <th>Track Code</th>
        <th>Tijd Reservatie</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?= $data['bestellingen'] ?>
    </tbody>
</table>
<?php require APPROOT . '/views/includes/footer.php'; ?>