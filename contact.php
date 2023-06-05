<?php
//essai avec mailjet 
    // composer require mailjet/mailjet-apiv3-php

    // require_once(__DIR__ . '/vendor/autoload.php');
    // use \Mailjet\Resources;
    // define('API_PUBLIC_KEY', 'c9a8f23df7e5103a73fea14eea338a92');
    // define('API_PRIVATE_KEY', '90c8b8b586cb870aa8ccb7bba2f1bf3d');
    // $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);
    
    // if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['message'])){()
    //     $nom = htmlspecialchars($_POST['nom']);
    //     $prenom = htmlspecialchars($_POST['prenom']);
    //     $email = htmlspecialchars($_POST['email']);
    //     $message = htmlspecialchars($_POST['message']);

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         $body = [
    //             'Messages' => [
    //             [
    //                 'From' => [
    //                 'Email' => $email,
    //                 'Name' => $nom,$prenom
    //                 ],
    //                 'To' => [
    //                 [
    //                     'Email' => "Herilus30@gmail.com",
    //                     'Name' => "Allan Herilus"
    //                 ]
    //                 ],
    //                 'Subject' => "Contact Portfolio",
    //                 'TextPart' => $message, 
    //                 'HTMLPart' => $message,
    //                 'CustomID' => "AppGettingStartedTest"
    //             ]
    //             ]
    //         ];
    //             $response = $mj->post(Resources::$Email, ['body' => $body]);
    //             $response->success();
    //             echo "Email envoyé avec succès !";
    //         }
    //     else{
    //         echo "Email non valide";
    //     }
    

    // }else{
    //     header('Location: index.php');
    //     die();
    // }

    //Peut-être vider le form lors du clic

    // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
    /* récupérer les données du formulaire en utilisant 
       la valeur des attributs name comme clé 
      */
    $mail_sender = $_POST['mail_sender'];
    $objet = $_POST['objet']; 
    $message = $_POST['message']; 
    
    // afficher le résultat
    echo '<h3>Informations récupérées en utilisant POST</h3>'; 
    echo 'Nom : ' . $nom . ' Objet : ' . $objet . ' message : ' . $message; 

    //envoyer le mail
    $message = wordwrap($message, 70); // use wordwrap() if lines are longer than 70 characters
    $header = "From"+ $mail_sender + "\r\n";
    $mail_user = "Herilus30@gmail.com";
    mail($mail_user, $objet, $message, $header);
    exit;
 }
?>

<head>
    <meta charset="UTF-8"> <!--encodage-->
    <meta hhtp-equiv="X-UA-Compatible" content="IE=edge"><!--fonctionner sur navigateur edge--> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--adapter en format mobile-->
    <title>Contact</title>
    <link rel="stylesheet" href="style_contact.css">
    <!-- icon send -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<nav><!--Partie navigation-->
    <div class="profile"><!--Partie Profil-->
        <a href="index.html"> <img src="images/PhotoAllan1.jpg" alt="Photo de profil"></a><!--Photo de profil-->
        <h1>Allan Herilus</h1>
    </div>
    <ul>
        <a href="https://www.linkedin.com/in/allan-h%C3%A9rilus-5035b7238/"><li>Linkedin</li></a>
        <a href="index.html"><li>Mes projets</li></a>
        <a target="_blank" href="HERILUS_ALLAN.pdf"><li>CV</li></a> <!--target _blank permet d'ouvrir le lien dans une nouvelle fenêtre-->
        <a target="_blank" href="ReleveNoteBUT1.pdf"><li>Mes notes</li></a>
        <li>Mon blog</li>
    </ul>
</nav>


<body>
    <section class="page-content">
        <h1>Formulaire de contact</h1>
        <p>
            Si vous souhaitez me contacter, n'hésitez pas! Ce formulaire est fait pour ça.
        </p>
        <form action="POST">
            <input type="text" name="mail_sender" id="sender_mail" placeholder="Votre adresse email">
            <input type="text" name="objet" id="obj_mail" placeholder="Objet">
            <input type="text" name="message" id="mess_mail" placeholder="Message">
            <input type="submit" value="submit" id="submit_mail">send<input>
        </form>
    </section>
        
</body>
<footer>       
    <div class="colonne">
        <h3>Mes adresses</h3>
        <p>Herilus30@gmail.com</p>
        <p>allan.herilus@etu.u-paris.fr</p>
        <a href="https://www.linkedin.com/in/allan-h%C3%A9rilus-5035b7238/"><p>Linkedin</p></a>          
    </div>
</footer>