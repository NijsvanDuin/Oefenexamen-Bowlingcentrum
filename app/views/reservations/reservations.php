<?php require APPROOT  . '/views/includes/head.php'; ?>

<section>
          <div class="title">
            <h1><?= $data['title']; ?></h1>
        </div>
    <div class="reservation_info">
        <table border=1 id="tableData">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Roepnaam</th>
                    <th>Datum</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Baan</th>
                    <th>Wijzigen</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>

    <h4 id="errorMessageDate"></h4>
</section>