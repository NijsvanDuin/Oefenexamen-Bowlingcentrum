<?php require APPROOT . '/views/includes/head.php'; ?>
<h3><?= $data['title'] ?></h3>

<form action="<?= URLROOT ?>/score/addScores" method="post">
    <label>
        <span>Person</span>
        <select name="person_id">
            <?php foreach ($data['options'] as $person) : ?>
                <option value="<?= $person->id; ?>"><?= $person->first_name; ?> <?= $person->last_name; ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>
        <input type="text" id="InputScore">
    </label>
    <button type="submit">Verstuur</button>
</form>

<a href="<?= URLROOT; ?>/homepages/index">home</a>
<?php require APPROOT . '/views/includes/footer.php'; ?>