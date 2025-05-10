# Blog Manager

Application de gestion d'articles simple pour un blog (CRUD) développée avec Laravel

## Prérequis

-   PHP 8.1 ou supérieur
-   Composer
-   Node.js 18+
-   Base de données MySQL/PostgreSQL
-   Serveur web (Apache/Nginx) ou PHP CLI

## Installation

1. Cloner le dépôt :

```bash
git clone https://github.com/nassoa/blog-manager.git
cd blog-manager
```

2. Installer les dépendances PHP :

```bash
composer install
```

3. Installer les dépendances NPM:

```bash
npm install
```

4. Copier le fichier d'environnement :

```bash
cp .env.example .env
```

5. Générer la clé d'application :

```bash
php artisan key:generate
```

6. Configurer la base de données dans .env :

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=blog_manager
DB_USERNAME=root
DB_PASSWORD=******
```

7. Exécuter les migrations :

```bash
php artisan migrate
```

8. Configurer l'URL de l'application dans .env :

```env
APP_URL=http://localhost:8000
```

9. Configurer l'accès local sur Windows (si nécessaire) :

-   Ouvrez le fichier C:\Windows\System32\drivers\etc\hosts en administrateur
-   Ajoutez la ligne suivante :

```plaintext
127.0.0.1 blog-manager.test
```

## Lancement de l'application

### En local

Lancer le serveur de développement :

```bash
npm run dev
```

L'application sera accessible à l'adresse : [http://blog-manager.test](http://blog-manager.test)

## Fonctionnalités

-   Création d'articles
-   Modification d'articles
-   Suppression d'articles
-   Affichage de la liste des articles
-   Protection CSRF
-   Interface minimaliste avec Tailwind CSS

## Structure technique

### Routes principales

```php
Route::resource('articles', ArticleController::class);
```

### Modèle Article

```php
protected $fillable = ['title', 'content', 'author'];
```

### Validation

```php
$request->validate([
    'title' => 'required|max:255',
    'content' => 'required',
    'author' => 'required|max:255'
]);
```

-   Stack : Laravel 10, MySQL, Tailwind CSS
-   Architecture MVC
-   Routes : Ressource CRUD (/articles)
-   Contrôleurs : ArticleController
-   Modèles : Article
-   Vues : Blade
-   Sécurité : Protection CSRF, validation des inputs
