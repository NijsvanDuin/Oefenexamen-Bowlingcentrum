<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<form action="<?= URLROOT; ?>/contacten/update/<?= $data['id']; ?>" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label for="first_name">Voornaam: </label>
                    <input type="text" name="first_name" id="first_name" value="<?= $data["row"]->first_name; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="infix">Tussenvoegsel: </label>
                    <input type="text" name="infix" id="infix" value="<?= $data["row"]->infix; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="last_name">Achternaam: </label>
                    <input type="text" name="last_name" id="last_name" value="<?= $data["row"]->last_name; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="phone">Mobiel: </label>
                    <input type="text" name="phone" id="phone" value="<?= $data["row"]->phone; ?>">
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
                    <?php
                    if ($data["row"]->isVolwassen == 1) {
                        echo '<input type="checkbox" name="isVolwassen" id="isVolwassen" value="1" checked>';
                    } else {
                        echo '<input type="checkbox" name="isVolwassen" id="isVolwassen" value="1">';
                    }
                    ?>
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