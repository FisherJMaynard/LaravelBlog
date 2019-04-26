README Projet Blog php Laravel M2DCISS RS
HAMMAR Nabil
BELLANGER Cindy

## Guide d'installation
1. Cloner le projet:
- Ouvrir l'invité de commande
- Vous placer dans le dossier où vous voulez cloner le projet
- Utiliser la commande suivante:
		$ git clone https://github.com/FisherJMaynard/LaravelBlog.git

2. Pour qu'une base de donnée soit utilisable:
- Créer la base de données sqlite dans le répertoire database du projet
- Aller modifier le fichier .env du projet en indiquant le chemin vers la bd à la ligne DB_BATABASE= ainsi que sqlite à DB_CONNEXION=
- Puis lancer la commande pour remplir la bd: php artisan migrate:refresh --seed
	La base de donnée contient 10 users avec 1 article chacun. 
	(Un user avec id et mot de passe créé pour la fonction d'authentification, voir Fonctionnalités ci-après). 

3. Rendre le projet fonctionnel:
- Ouvrir l'invité de commande
- Vous placer dans le répertoire du projet
- Utiliser la commande suivante:
		php artisan serve
- Vous pouvez maintenant visiter la page (avec comme adresse celle du locahost)


## Fonctionnalités
Nous avons effectué le TP2:
- L'ensemble des pages suit un même layout,
- La base de donnée est remplie grâce à la factory,
- Les 3 derniers artiles sont affichés en page d'accueil,
- Il est possible de cliquer sur un article pour l'afficher.

Nous avons implémenté les fonctionnalités suivantes:
1. 1-Gestion des commentaires
	Il est possible d'ajouter un commentaire en dessous de l'article.

2. 2-CRUD des articles
	La partie "pour aller plus loin" a aussi été effectuée (protection par l'authentification, voir fonctionnalité suivante).

3. 3-Authentification:
Pour la fonctionnalité ajoutant l’authentification, il y a besoin de fournir les identifiants d’utilisateurs générés. Il faut procéder comme suit:
* Se placer sur le répertoire contenant le projet laravel
* Dans un terminal, taper la commande suivante: php artisan db:seed
* Se connecter au site internet avec les identifiants suivants:
	    'email' => 'user@gmail.com',
            'password' => '123456'),


## Difficultés Rencontrées
Toute la progression du projet n'est pas visible sur github (nous avons commencé à l'utiliser assez tard).
La structure du blog (exercice 1 à 5) a été effectuée par Cindy, la suite du projet ainsi que les options par Nabil. 



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
