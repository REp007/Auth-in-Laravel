## Auth in laravel

### Installation
```bash
git clone <url> 
```
```bash
cd Auth-in-Laravel
```

```bash
composer install
```
```bash
npm i
```
or
```
bun install
```

## How Lunch Tp

1. Migrate the DB files into your DB
```bash
php artisan migrate
```
2. Also Seed some Fake Data into you Tables using this commande:
```bash 
php artisan db:seed --class=PostSeeder
```

3. for Lunch The App use this commande to create listen port

```bash
php artisan serve
```

4.  
5. create a user in `http:/localhost:8000/register`
6. <del>add some posts for this user using Auth::id()
   1. You can inserted them in you DB manuelle or use `php artisan tinker` for add post for your user using ORM(Elequont).
   2. after that you can see in `http://127.0.0.1:8000/dashboard/posts` all posts for that user
</del>

## 19-04-2024

- [web.php](routes/web.php)
int this file you can see in line 40 & 43 the two routes you will use for the test this exercices.

### Tp1 /send-email
first config you app
in .env
change the mail driver to mailtrap
```bash
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=username
MAIL_PASSWORD=password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="email@gmail.com"
MAIL_FROM_NAME="email@gmail.com"
```
second in this file [Controller](app\Http\Controllers\OrderController.php)
you can see the function `sendEmail` that will send an email to the user with the order details.
change the email for test this function.

```php
    public function sendEmail()
    {
        Mail::to('<email>')->send(new OrderShip(Auth::id(), Auth::user()->name, Auth::user()->email));
        echo 'good, email sent successfully!';
    }
```

for the body of the email
you can modify it
in this file view
[body of the email](resources\views\mail\testmail.blade.php)

finally enter this route will send email for you address
> `http:/localhost:8000/send-email`



