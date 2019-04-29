README Projet Blog php Laravel M2DCISS RS
- HAMMAR Nabil
- BELLANGER Cindy

# Guide d'installation
1. Cloner le projet:
- Ouvrir l'invité de commande
- Vous placer dans le dossier où vous voulez cloner le projet
- Utiliser la commande suivante:
		$ git clone https://github.com/FisherJMaynard/LaravelBlog.git

2. Pour qu'une base de donnée soit utilisable:
- Créer la base de données sqlite dans le répertoire database du projet
- Aller modifier le fichier .env du projet en indiquant le chemin vers la bd à la ligne DB_BATABASE= 
ainsi que sqlite à DB_CONNEXION=
- Lancer la commande pour remplir la bd: php artisan migrate:refresh --seed . La base de donnée contient 10 users avec 1 article chacun. (Un user et un admin avec id et mot de passe sont créés pour la fonction d'authentification, voir Fonctionnalités ci-après). 

3. Rendre le projet fonctionnel:
- Ouvrir l'invité de commande
- Vous placer dans le répertoire du projet
- Utiliser la commande suivante:
		php artisan serve
- Vous pouvez maintenant visiter la page (avec comme adresse celle du locahost)

# Fonctionnalités
Nous avons implémenté les fonctionnalités suivantes:
1. Gestion des commentaires
	Il est possible d'ajouter un commentaire en dessous des articles.
2. CRUD des articles
	La partie "pour aller plus loin" a aussi été effectuée (protection par l'authentification, voir fonctionnalité suivante).Chaque utilisateur dispose d'un espace personnel d'où il peut gérer (CRUD) ses articles.
3. Identification / Authentification qui protège l'accès à l’administration. Pour la fonctionnalité ajoutant l’authentification, vous pouvez utiliser les comptes suivants:
* login: user@gmail.com     password: '123456' pour un utilisateur lambda
* login: admin@gmail.com    password:'123456789' pour un administrateur
4 - Ajout de rôles utilisateurs
	Il est possible de gérer(CRUD) les utilisateurs de l'application. Il est donc possible pour l'administrateur d'élever un utilisateur au role d'administrateure et vice versa.


## Fonctionnalités à regarder:
De préférence, suivez l'ordre des fonctionnalités présentées sinon vous ne serez pas connecté aux bons moments etc.
Les fonctionnalités du TP2 et les fonctionnalités optionnelles ajoutées étant reliées, nous avons structuré les tests à faire en 4 parties qui ne sont pas strictement exclusives: par exemple, certaines fonctionnalités de l'authentification sont impliquées dans le test de la fonctionnalité de gestion des commentaires.

1. Fonctionnalités générales:
- La page d'accueil contient les 3 articles les plus récents (titre et date).
- Cliquer sur l'onglet Articles: il contient les articles de la base de donnée (titre, date, auteur, article). On peut accéder à une page pour chaque article.
- Cliquer sur l'onglet Articles VIP: son contenu sera accessible pour les membres authentifiés uniquement.
- Cliquer sur l'onglet Contact: on peut envoyer un message à l'administrateur du site en donnant son nom/prénom, e-mail, le message, et en cliquant sur "envoyer!"

2. Login/authentification et CRUD des articles:
- Cliquer sur l'onglet Login: se logger avec les identifiants fournis plus haut. Une fois loggé, dans contact il n'y a plus besoin de donner son nom/prénom et email (qui sont complétés automatiquement), il suffit de taper son message et de l'envoyer. En se loggant, une page supplémentaire est accessible: Mon profil.
- Cliquer sur la page Mon Profil: Elle contient la liste des articles de l'utilisateur connecté.
- On peut y créer un article (titre, catégorie, contenu) et cliquer sur envoyer. L'article apparait alors dans la liste d'articles de l'utilisateur et est ajouté à la BD (il est visible en première place dans l'onglet "Articles").
- Accédez directement à la page de l'article par le lien hypertexte sur le titre de l'article (dans la liste d'articles de l'utilisateur).
- Revenez sur "Mon profil", cliquez sur "modifier": le titre, la catégorie et le contenu préalables sont affichés. On peut changer l'article et le renvoyer. On peut aussi le supprimer. C'est ce qui correspond à la fonctionnalité 2- Le CRUD des articles.
- Allez sur la page ArticlesVIP: le contenu spécial pour les utilisateurs enregistrés est visible.

3. Gestion des commentaires:
- Allez sur la page Articles. Cliquez sur un article (le premier c'est plus simple pour la suite).
- Laissez un commentaire: vous n'avez pas besoin de donner votre nom et prénom car vous êtes connecté. Le commentaire s'affiche en dessous de l'article. Laissez un autre commentaire. Il s'ajoute en dessous du précédent. 
- Déconnectez vous en cliquant sur l'onglet "user" et en cliquant sur le bouton "logout" qui s'affiche.
- Maintenant retournez sur la page Articles. Cliquez sur l'article où vous avez mis les 2 commentaires. Ils sont toujours visibles après déconnexion. Laissez un autre commentaire: comme vous n'êtes plus connecté, vous devez maintenant donner votre nom/prénom, email en plus de votre commentaire.
- Si vous ne remplissez pas les champs, vous aurez des messages vous indiquant de remplir votre nom/prénom par exemple. De même si vous donnez une adresse mail ne contenant pas de @ par exemple.

4. Identification / Authentification qui protège l'accès à l’administration et protection par middlewares
- Connectez-vous avec comme identifiant 'admin@gmail.com' et '123456789' comme mot de passe. Vous avez les mêmes droits que l'utilisateur lambda mais en plus vous avez un espace d'administration (onglet Administration). Pour cela, nous avons utilisé des middleware (voir dans les routes du projet) pour permettre à certains utilisateurs d'accéder à certaines fonctionnalités/parties du site et pour les protéger:
- Si vous tapez l'URL http://localhost:8000/admin cela va fonctionner car vous êtes connecté en tant qu'administrateur.
- En revanche, déconnectez vous (admin -> logout). Maintenant, si vous tapez cette même URL (http://localhost:8000/admin) vous accédez à la page d'accueil du site et non aux fonctionnalités d'administrateur.
- Dans l'espace d'administration, vous pouvez gérer(CRUD) les utilisateurs. Si vous supprimez un utilisateur, tous les articles de ce dernier seront egalement supprimés. Tous les commentaires des articles supprimés le seront aussi automatiquement.



## Remarques
- Toute la progression du projet n'est pas visible sur github car nous avons commencé à l'utiliser assez tard:  La structure du blog a été effectuée par Cindy et envoyée d'un coup dans le tout premier commit ("first commit" envoyé depuis l'ordinateur de nabil), le formulaire de contact ainsi que les options ont été faits par Nabil (tous les commits suivants). C'est pourquoi la répartition des commit n'est pas égale.
- Nous ne comprenons pas d'où vient le 3ème contributeur: tous les commit (sauf ceux de cindy) ont été faits par Nabil depuis son mac (qui voyant ce contributeur apparaitre sur son propre commit a rentré ses identifiants pour voir si ça arrêtait de commiter avec le mauvais nom et effectivement cela a bien permis de remettre son nom sur les commit suivants qu'il a effectués). Vous pourrez constater cela sur l'image jointe à notre e-mail.
- Nous n'avons pas touché au CSS dans notre projet.



## 
##
Test git
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
