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
        <h3><?= $data['title']; ?></h3>
        <h4>Gebruiker: <?= $data['naam']; ?></h4>
        <p><?= $data['personId'];?></p>
    </div>
    <form action="<?= URLROOT; ?>/ContactController/update" method="POST">
        <div>
            <label for="first_name">Voornaam</label>
            <input type="text" name="first_name" id="first_name"> 
        </div>
        <div>
            <label for="last_name">Achternaam</label>
            <input type="text" name="last_name" id="last_name"> 
        </div>        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email"> 
        </div>        <div>
            <label for="phone">Telefoon</label>
            <input type="text" name="phone" id="phone"> 
        </div>
        <div>
            <input type="hidden" name="person_id" vale="<?= $data['personId'];?>">
        </div>
        <div>
            <input type="submit" value="Gegevens aanpassen">
        </div>
    </form>
</section>