<?php require APPROOT  . '/views/includes/head.php'; ?>

<div class="title">
    <h1><u><?= $data['title']; ?></u></h1>
</div>
<form action="<?= URLROOT; ?>/reservations/update/ <?= $data['id'] ?>" method="post">
    <div>
        <label for="code">Baannummer:</label>
        <select name="track_id" id="track_id">
            <option value="<?=$data['code'];?>">Huidige baan:   <?=$data['code'];?></option>
            <option value="1">Baan 1</option>
            <option value="2">Baan 2</option>
            <option value="3">Baan 3</option>
            <option value="4">Baan 4</option>
            <option value="5">Baan 5</option>
            <option value="6">Baan 6</option>
            <option value="7">Baan 7</option>
            <option value="8">Baan 8</option>
        </select>
        <input type="hidden" name="id" value="<?= $data['id']; ?>">


        <input type="submit" value="Wijzigen">

    </div>
</form>