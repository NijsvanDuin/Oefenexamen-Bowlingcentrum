<?php require APPROOT  . '/views/includes/head.php'; ?>

<div class="title">
    <h1><u><?= $data['title']; ?></u></h1>
</div>
<form action="<?= URLROOT; ?>/reservations/update/ <?= $data['id'] ?>" method="post">
    <div>
        <label for="code">Baannummer:</label>
        <select name="track_id" id="track_id">
            <option value="<?= $data['code']; ?>">Huidige baan: <?= $data['code']; ?></option>
            <option value="1">Baan 1</option>
            <option value="2">Baan 2</option>
            <option value="3">Baan 3</option>
        </select>
        <input type="hidden" name="id" value="<?= $data['id']; ?>">


        <input type="submit" value="Wijzigen">

    </div>
</form>