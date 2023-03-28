<?php require APPROOT  . '/views/includes/head.php'; ?>

<section class="p-2">
  <h3>Edit reservation</h3>
  <form action="<?= URLROOT; ?>/reservation/edit/<?= $data['reservation']->id; ?>" method="post">
    <label>
      <span>Adults</span>
      <input type="number" name="adults" value="<?= $data['reservation']->adults; ?>">
    </label>
    <label>
      <span>Children</span>
      <input type="number" name="children" value="<?= $data['reservation']->children; ?>">
    </label>
    <label>
      <span>Date reservation</span>
      <input type="date" name="date_reservation" value="<?= $data['reservation']->date_reservation; ?>">
    </label>
    <label>
      <span>Time reservation</span>
      <input type="time" name="time_reservation" value="<?= $data['reservation']->time_reservation; ?>">
    </label>
    <label>
      <span>Is active</span>
      <input type="checkbox" name="is_active" <?= $data['reservation']->is_active ? 'checked' : ''; ?>>
    </label>
    <span>Created: <?= $data['reservation']->created_at; ?></span>
    <span>Last updated<?= $data['reservation']->updated_at; ?></span>
    <input type="submit" value="Update" class="btn btn-success">
  </form>
</section>

<section>
  <details>
    <summary>Dev</summary>
    <pre>
      <?php print_r($data); ?>
    </pre>
  </details>
</section>

<?php require APPROOT  . '/views/includes/footer.php'; ?>