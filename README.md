# exo-symfony

Initialisation du projet :

> Configuration du fichier .env "DATABASE_URL"
> Dans le dossier repository lancer la commande "composer install"
> Ensuite la commande "php bin/console make:migration", "php bin/console doctrine:migrations:migrate" et "php bin/console doctrine:fixtures:load"
> Utiliser la commande "symfony server:start" pour lancer le server
> Se rendre sur le lien http://127.0.0.1:8000/

# Presentation du projet :

Back
> /login : permet de se connecter avec les identifiants ( test@gmail.com et password )
> /register : pour créer un compte
> /dashboard : pour ajouter supprimer ou modifier les produits

Front
> /shop : affiche les produits
> /shop/Chaussure : affiche les chassure et permet de les filtrer en fonction des tailles
> /recherche?search=art : recherche art dans le titre, la categorie, et les mots clés
