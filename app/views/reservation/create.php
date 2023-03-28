<?php require APPROOT  . '/views/includes/head.php'; ?>

<section class="p-2">
  <h3>Create reservation</h3>
  <form action="<?= URLROOT; ?>/reservation/create" method="post">
    <label>
      <span>Adults</span>
      <input type="number" name="adults">
    </label>
    <label>
      <span>Children</span>
      <input type="number" name="children">
    </label>
    <label>
      <span>Date reservation</span>
      <input type="date" name="date_reservation">
    </label>
    <label>
      <span>Time reservation</span>
      <input type="time" name="time_reservation">
    </label>
    <label>
      <span>Is active</span>
      <input type="checkbox" name="is_active">
    </label>
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