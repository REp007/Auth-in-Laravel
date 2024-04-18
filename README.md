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
5. create a user in `http:/localhost:8000/login`
6. .... 
7. add some posts for this user using Auth::id()
   1. You can inserted them in you DB manuelle or use `php artisan tinker` for add post for your user using ORM(Elequont).
   2. after that you can see in `http://127.0.0.1:8000/dashboard/posts` all posts for that user

8. Not found


