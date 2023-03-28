<?php require APPROOT  . '/views/includes/head.php'; ?>
<section class="p-2 w-full">
  <h3>Reservation</h3>
  <a href="<?= URLROOT; ?>/reservation/create">Create</a>
  <table class="w-full">
    <thead>
      <tr>
        <th>ID</th>
        <th>Adults</th>
        <th>Children</th>
        <th>Is active</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data['reservations'] as $reservation) : ?>
        <tr>
          <td><?= $reservation->id; ?></td>
          <td><?= $reservation->adults; ?></td>
          <td><?= $reservation->children; ?></td>
          <td><?= $reservation->is_active; ?></td>
          <td><?= $reservation->created_at; ?></td>
          <td><?= $reservation->updated_at; ?></td>
          <td>
            <a href="<?= URLROOT; ?>/reservation/edit/<?= $reservation->id; ?>">Edit</a>
          </td>
          <td>
            <form action="<?= URLROOT; ?>/reservation/delete/<?= $reservation->id; ?>" method="post">
              <input type="submit" value="Delete" class="btn btn-danger">
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
  </table>
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