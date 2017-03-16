## laravel 5.1 
    1、创建权限提供者（1）、 php artisan  make:provider AuthServiceProvider
                    （2）、配置conf/app.php   App\Providers\AuthServiceProvider::class,
                    （3）、对  App\Providers\AuthServiceProvider.php 进行修改
    2、获取本地配置的两种方法:
                    （1）、$environment = app()->environment();
                    （2）、getenv('APP_ENV')
    3、移动User.php 模型位置到 Models 时需要把 config/auth.php 
     'model' => App\User::class,改为'model' => App\Models\User::class, 
    4、上线以后必须设置 \bootstrap\cache 和 \storage 必须可以写入 
        