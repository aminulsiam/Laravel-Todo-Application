# Laravel ToDo App

This is a simple ToDo app with multiple user support.

This is built on Laravel Framework 5.6. This was built for demonstrate purpose.

## Installation

Clone the repository-
```
git clone https://github.com/aminulsiam/Laravel-Todo-Application.git
```

Then cd into the folder with this command-
```
cd Laravel-Todo-Application
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
ren .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todos` and then do a database migration using this command-
```
php artisan migrate
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Ask a question?

If you have any query please contact at aminulhossain90@gmail.com

## Screenshot

![Landing Page](/screenshots/ss1.png)
![Sign In Page](/screenshots/ss2.png)
![Registration Page](/screenshots/ss3.png)
![ToDo List Page](/screenshots/ss4.png)
![Create New ToDo Page](/screenshots/ss5.png)
![User Profile Page](/screenshots/ss6.png)
