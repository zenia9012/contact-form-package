#   Contact form for laravel

## This package is just form with few fields.
Fields:
- email
- name
- message

Features:
- send email for admin
- save user contact to database


Also you can easily add fields to form

## Install

1) In your terminal:
``` bash
composer require  yevhenii/contact
```
2) Add to config/app.php  provider 

``` bash
Yevhenii\Contact\ContactServiceProvider::class,
```


3) Publish migration, config, views

```bash
php artisan vendor:publish --provider="Yevhenii\Contact\ContactServiceProvider"
php artisan migrate
```

## Usage 

Add this function to your blade wherever you need

```bash
{!! Yevhenii\Contact\Models\Contact::form() !!}
```
