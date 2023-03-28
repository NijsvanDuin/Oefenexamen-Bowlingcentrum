<?php require APPROOT . '/views/includes/head.php';
echo '<h1>Update Bestelling</h1>'
?><br>

<form action="<?= URLROOT; ?>/bestellen/update/<?= $data['id']; ?>" method="post">
    <div id="form">'
        <table>
            <tbody>
                <tr>
                    <td>
                        <label>
                            <span>Extra: </span>
                            <select name="newOptionId">
                                <option>Kies Extra</option>
                                <?php foreach ($data["options"] as $option) : ?>
                                    <?php if ($option->id == $data["current"]->option_id) : ?>
                                        <option value="<?= $option->id; ?>" selected><?= $option->name; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $option->id; ?>"><?= $option->name; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </td>
                    <!--  -->
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-warning btn-lg btn-block">Updaten</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</form>




<?php require APPROOT . '/views/includes/footer.php'; ?>