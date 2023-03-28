<?php require APPROOT . '/views/includes/head.php';
echo $data["title"];
?><br>

<form action="<?= URLROOT; ?>/bestellen/create" method="post">
    <table>
        <tbody>
            <tr>
                <td>
                    <label>
                        <span>Extra: </span>
                        <select name="options_id">
                            <option>Kies Extra</option>
                            <?php foreach ($data["options"] as $option) : ?>
                                <option value="<?= $option->id; ?>"><?= $option->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Aanmaken">
                </td>
            </tr>
        </tbody>
    </table>

</form>




<?php require APPROOT . '/views/includes/footer.php'; ?>