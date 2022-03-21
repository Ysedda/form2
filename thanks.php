<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$errors = [];
    if (empty($_POST['user_name'])) {
        $errors[] = 'Nom';
    }
    if (empty($_POST['user_first_name'])) {
        $errors[] = 'Prénom';
    } 
    if (empty($_POST['user_email'])) {
        $errors[] = 'Courriel';
    } 
    if (empty($_POST['user_phone'])) {
        $errors[] = 'Téléphone';
    } 
    if (empty($_POST['user_message'])) {
        $errors[] = 'Message';
    } 
    if (empty($_POST['subjects'])) {
        $errors[] = 'Sujet';
    } 
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)){
        echo'Le champ \'courriel\' n\'est pas valide';
    }?>
    <ul>
    <?php if (!empty($errors)){ ?>
    <p><?php echo 'Les champs suivants sont vides:'?></p>
    <?php 
         foreach ($errors as $error) { ?>
            <li><?php echo $error ?></li>           
        <?php } ?>
    </ul>
    <?php } else { ?> 

    <p> Merci <?php echo $_POST['user_first_name'] . $_POST['user_name']; ?> de nous avoir contacté à propos de <?php echo $_POST['subjects'] ?>. </br>

        Un de nos conseillers vous contactera soit à l'adresse <?php echo $_POST['user_email'] ?> ou par téléphone au <?php echo $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande : </br>

        <?php echo $_POST['user_message'] ?> </p>

        <?php } ?>
</body>

</html>