<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About Project

This project includes code of seymur.info website.
It also includes good looking material design admin panel.
This project includes this packages: 

##Requirements
* [Composer](https://getcomposer.org/)
* [Laravel](https://laravel.com/)
* [Roles](https://github.com/spatie/laravel-permission) Associate users with roles and permissions 
* [Forms & HTML](https://laravelcollective.com/docs/5.2/html) Laravel Forms

## Installation

You can clone project with git:
``` bash
git clone https://github.com/seymuromarov/seymur.info.git
```

after this go to project folder
``` 
cd seymur.info
```

create new .env file from env.example

``` 
composer update
php artisan key:generate
```

after this migrate database and add default admin user
``` 
php artisan:migrate
php artisan db:seed --class=adminUserAdder
```
default admin credentials 
``` 
email: admin@admin.com
password :123456
```



this project doesn't allow users to registrate without logging in you can change it on
RegisterController.php already commented needed part to change
## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
