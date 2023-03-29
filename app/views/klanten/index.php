<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<form action="<?= URLROOT; ?>/klanten/index" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="datum">Datum</label>
                    <input type="date" name="datum" id="datum">
                    <input type="hidden" name="tijd" value="12:07:59">
                </td>
                <td>
                    <input type="submit" value="Verzenden">
                </td>
            </tr>
        </tbody>
</form>
<table>
    <thead>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Mobiel</th>
        <th>E-Mail</th>
        <th>Volwassen</th>
    </thead>
    <tbody>
        <?php foreach ($data["klanten"] as $klanten) : ?>
            <tr>
                <td><?= $klanten->first_name ?></td>
                <td><?= $klanten->infix ?></td>
                <td><?= $klanten->last_name ?></td>
                <td><?= $klanten->phone ?></td>
                <td><?= $klanten->email ?></td>
                <td><?= $klanten->isVolwassen ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?= ($data["mes"]); ?>

<?php require APPROOT . '/views/includes/footer.php'; ?>