<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<table>
    <thead>
        <th>Voornaam</th>
        <th>Tussenvoegsel</th>
        <th>Achternaam</th>
        <th>Mobiel</th>
        <th>E-Mail</th>
        <th>Volwassen</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($data["contacten"] as $contacten) : ?>
            <tr>
                <td><?= $contacten->first_name ?></td>
                <td><?= $contacten->infix ?></td>
                <td><?= $contacten->last_name ?></td>
                <td><?= $contacten->phone ?></td>
                <td><?= $contacten->email ?></td>
                <td><?= $contacten->isVolwassen ?></td>
                <td><a class="update" href='/contacten/update/<?= $contacten->contact_id ?>'>update</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require APPROOT . '/views/includes/footer.php'; ?>