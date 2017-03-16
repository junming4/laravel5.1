## laravel 5.1 
    1、创建权限提供者（1）、 php artisan  make:provider AuthServiceProvider
                    （2）、配置conf/app.php   App\Providers\AuthServiceProvider::class,
                    （3）、对  App\Providers\AuthServiceProvider.php 进行修改
    2、获取本地配置的两种方法:
                    （1）、$environment = app()->environment();
                    （2）、getenv('APP_ENV')
        