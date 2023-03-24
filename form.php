<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    if(!isset($_POST['user_name'])|| trim($_POST['user_name'])=== '')
    $errors[] = 'Please enter a name';

    if(!isset($_POST['email'])|| trim($_POST['email'])=== '') 
    $errors[] = 'Please enter an email';

    if(!isset($_POST['user_phone'])|| trim($_POST['user_phone'])=== '')
    $errors[] = 'Please enter a phone number';

    if(empty($errors)){
        header('Location: thanks.php');
    }
}
    
?>

<body>

    <form method="post" action="thanks.php">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name" required>
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="phone">Téléphone:</label>
            <input type="phone" id="phone" name="user_phone" required>
        </div>
        <div>
            <label for="subject">Sujet</label>
            <select id="subject" name="subject" required>
                <option value="Sujet n°1">Sujet n°1</option>
                <option value="Sujet n°2">Sujet n°2</option>
                <option value="Sujet n°3">Sujet n°3</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" required>Votre message ici</textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>

</body>