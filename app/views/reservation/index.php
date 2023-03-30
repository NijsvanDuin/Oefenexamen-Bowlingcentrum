<?php
require APPROOT  . '/views/includes/head.php';
?>
<h3><u><?= $data['title']; ?></u></h3><br>
<form action="<?= URLROOT; ?>/Reservation/index" method="post">
    <h5>
        <form action="controllers/Reservation"></form>
        Reservering van: <?= $data['reservationCustomer']; ?>
        <input type="date" id="Date" name="Date">
        <input type="submit" value="Toon Reserveringen">
    </h5>
</form>

<br>

<table border=1>
    <thead>
        <th>Naam</th>
        <th>Datum</th>
        <th>Aantal uren</th>
        <th>Begintijd</th>
        <th>Eindtijd</th>
        <th>Aantal volwassenen</th>
        <th>Aantal kinderen</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>

<?= $data['mes']; ?>

<a href="<?= URLROOT; ?>/homepages/index">home</a>
<?php require APPROOT  . '/views/includes/footer.php'; ?>