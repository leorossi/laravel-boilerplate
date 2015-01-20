# Laravel Boilerplate

Simple laravel boilerplate to bootstrap your application.

Is intended to be kept simple and light, with many small features I often need to start my projects.
Every suggestion are **very welcome**!

## Configuration

### Local environment
In the `bootstrap/start.php` file, change the `$env` variable according to your environment
### Database credentials
In the `app/config/local/database.php` change the credentials of your DB

## Admin credentials
Edit the `database/migrations/2015_01_20_112721_add_admin_user.php` file and change the fields as you wish.

## Installation

Clone this GitHub repository
```
git clone https://github.com/leorossi/laravel-boilerplate
```

Change directory
```
cd laravel-boilerplate
```


Install bower components
```
bower install bootstrap jquery
```

Run migrations
```
php artisan migrate
```
**You are good to go!**

## What is provided
- User table with email, password, role fields
- Login/Logout features (email: admin@example.com, password: admin)
- Admin-grouped routes 

# Next steps
- Simple CRUD user management in admin area
- *Your idea here...*