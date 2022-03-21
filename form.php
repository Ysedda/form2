<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_first_name">
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" id="phone" name="user_phone">
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div>
        <label for="pet-select">Choose a subject:</label>
            <select name="subjects" id="subject-select">
                <option value="">--Please choose an option--</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="hamster">Hamster</option>
            </select>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
        <?php
        var_dump($_POST);
        ?>
    </form>
</body>

</html>