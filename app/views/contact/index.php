<?php require APPROOT  . '/views/includes/head.php'; ?>


<header>
    <nav>
        <ul>
            <li>
                <img src="../../../public/img/Logo.png" alt="Logo">
            </li>
            <li>
                <a class="nav" href="#">Reserveren</a>
            </li>
            <li>
                <a class="nav" href="<?= URLROOT; ?>/Contactgegevens/1">Contactgegevens</a>
            </li>
            <li>
                <a class="nav" href="#">Score</a>
            </li>
            <li>
                <a class="nav" href="#">Bestellingen</a>
            </li>
        </ul>
    </nav>
</header>

<section>
    <div class="title">
        <h1><?= $data['title'];?></h1>
        <h3>Gebruiker: Medewerker</h3>
    </div>

    <div class="contact_info">
        <table>
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Achternaam</th>
                    <th>Email</th>
                    <th>Telefoon</th>
                    <th>Datum aangemaakt</th>
                    <th>Datum gewijzigd</th>
                    <th class="edit"></th>
                    <th class="delete"></th>
                </tr>
            </thead>
            <tbody>
               <?= $data['rows']; ?>
            </tbody>
        </table>
    </div>
    <div class="button">
        <a href="<?= URLROOT; ?>/Contact/create">
            <input type="button" value="Contactgegevens toevoegen">
        </a>
    </div>
</section>

