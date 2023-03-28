<?php require APPROOT  . '/views/includes/head.php'; ?>

<section class="p-2">
  <h3>Create reservation</h3>
  <form action="<?= URLROOT; ?>/reservation/create" method="post">
    <label>
      <span>Person</span>
      <select name="person_id">
        <?php foreach ($data['options']['persons'] as $person) : ?>
          <option value="<?= $person->id; ?>"><?= $person->first_name; ?> <?= $person->last_name; ?></option>
        <?php endforeach; ?>
      </select>
    </label>
    <label>
      <span>Track</span>
      <select name="track_id">
        <?php foreach ($data['options']['tracks'] as $track) : ?>
          <option value="<?= $track->id; ?>"><?= $track->code; ?></option>
        <?php endforeach; ?>
      </select>
    </label>
    <label>
      <span>Opening</span>
      <select name="opening_id">
        <?php foreach ($data['options']['openings'] as $opening) : ?>
          <option value="<?= $opening->id; ?>"><?= $opening->day_name; ?> <?= $opening->start; ?> - <?= $opening->end; ?></option>
        <?php endforeach; ?>
      </select>
    </label>
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