# FormulaireDeConcactPHP

Objectifs:
Lire les informations d'une requête
Modifier une réponse
 

Sujet:
Dans cet atelier, vous allez développer un simple formulaire de contact et récupérer les informations de celui-ci côté serveur avant de les réafficher.


Commencez par créer un fichier index.php, initalisez une structure de base HTML et créez un formulaire contenant les input suivants:

Nom
Prénom
Adresse email
Numéro de téléphone
Message
N'oubliez pas de donner un attribut name à chaque input, c'est sous ce nom que vous récupérez les informations en back-end. 

 

Ensuite, dans la balise form ajoutez les attributs suivants:

action="contact.php" pour indiquer sur quelle adresse envoyer la requête contenant les donnée du formulaire
method="POST" pour indiquer le verbe a utiliser
 

Enfin, créez un fichier contact.php dans lequel vous devrez:

récuperer l'ensemble du contenu de la requête (nom, prénom, email, etc...)
afficher un message de confirmation de réception
afficher les informations de la requêtes sous forme de récapitulatif du message envoyé
 

BONUS: Si le nom reçu dans la requête est "teapot", affichez sur contact.php le message "I'm a teapot" et renvoyez un code 418.

 
