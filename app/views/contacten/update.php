<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<form action="<?= URLROOT; ?>/contacten/update/<?= $data['id']; ?>" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="first_name">Voornaam: </label>
                    <span><?= $data["row"]->first_name; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="infix">Tussenvoegsel: </label>
                    <span><?= $data["row"]->infix; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="last_name">Achternaam: </label>
                    <span><?= $data["row"]->last_name; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Mobiel: </label>
                    <span><?= $data["row"]->phone; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">E-Mail: </label>
                    <input type="text" name="email" id="email" value="<?= $data["row"]->email; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="isVolwassen">Volwassen: </label>
                    <?php if ($data["row"]->isVolwassen == 1) : ?>
                        <input type="checkbox" name="isVolwassen" id="isVolwassen" value="1" disabled checked>
                    <?php else : ?>
                        <input type="checkbox" name="isVolwassen" id="isVolwassen" value="1" disabled>
                    <?php endif; ?>
                </td>
            </tr>
            <input type="hidden" name="id" value="<?= $data["row"]->contact_id; ?>">
            <tr>
                <td>
                    <button type="submit" class="btn btn-warning btn-lg btn-block">Updaten</button>
                </td>
            </tr>
        </tbody>
    </table>

</form>

<?php require APPROOT . '/views/includes/footer.php'; ?>