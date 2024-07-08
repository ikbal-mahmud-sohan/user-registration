step 1:
composer create-project laravel/laravel user-registration

step 2:
php artisan install:api

step 3:
setup database configuration 
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_api
DB_USERNAME=root
DB_PASSWORD=new_password

step 4:
php artisan make:controller Auth/LoginController

step 5:
pre request script:

pm.sendRequest({
    url: 'http://127.0.0.1:8000/sanctum/csrf-cookie',
    method: 'GET'
}, function (err, res, {cookies}) {
    if(!err){
        pm.globals.set('csrf-token', cookies.get('XSRF-TOKEN'))
    }
});



