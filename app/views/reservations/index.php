<?php require APPROOT  . '/views/includes/head.php'; ?>


<section>
    <div class="top">
        <div class="title">
            <h1><?= $data['title']; ?></h1>
        </div>
        <!-- Selecteer een datum en zoekt dan door de tabel data naar soortgelijke data -->
        <div class="filter">
                <input type="date" id="date_reservation">
                <input type="submit" value="Tonen" onclick="myFunction()">
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

    <h4 id="errorMessageDate"></h4>
</section>

<script src="../../../public/js/app.js"></script>


