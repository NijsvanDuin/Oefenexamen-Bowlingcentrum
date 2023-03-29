<?php require APPROOT  . '/views/includes/head.php'; ?>


<section>
    <div class="top">
        <div class="title">
            <h1><?= $data['title']; ?></h1>
        </div>
        <div class="filter">
            <form action="<?= URLROOT;?>/reservations/selectDate" method="get">
                <input type="date" name="date_reservation" id="date_reservation">
                <input type="submit" value="Tonen">
            </form>
        </div>
    </div>
    <div class="reservation_info">
        <table border=1 id="tableData">
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Roepnaam</th>
                    <th>Reserveringsdatum</th>
                    <th>Uren</th>
                    <th>Volwassenen</th>
                    <th>Kinderen</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
</section>
