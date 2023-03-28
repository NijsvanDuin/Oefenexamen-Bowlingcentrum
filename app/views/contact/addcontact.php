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
                <a class="nav" href="<?= URLROOT; ?>/ContactController/index/1">Contactgegevens</a>
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
        <h4><?= $data['title'];?></h4>
    </div>

    <form action="<?= URLROOT ?>/ContactController/create" method="post">
        <div>
            <label for="first_name">Voornaam</label>
            <input type="text" name="first_name" id="first_name">
        </div>
        <div>
            <label for="last_name">Achternaam</label>
            <input type="text" name="last_name" id="last_name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="phone">Telefoon</label>
            <input type="text" name="phone" id="phone">
        </div>
        <input type="hidden" name="person_id" value="<?= $data['personId']; ?>"><br>

        <input type="submit" value="Contactgegevens toevoegen">
    </form>
</section>
<!-- 

<div class="button">
    <a href="<?= URLROOT; ?>Contact/addContactInfo/<?= $data['userId']; ?>">
        <input type="button" value="Contactgegevens toevoegen">
    </a>
</div> -->