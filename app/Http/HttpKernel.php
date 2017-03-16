<?php
/**
 * Email 2284876299@qq.com
 * Author: Xiaojm
 * Date: 2017/3/16
 * Time: 17:36
 * Desc: 重新修改一个内容http
 */

namespace App\Http;


use Illuminate\Foundation\Http\Kernel;

use Illuminate\Routing\Router;
use Illuminate\Contracts\Foundation\Application;


class HttpKernel extends Kernel
{
    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [];

    /**
     * Create a new HTTP kernel instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function __construct(Application $app, Router $router)
    {

        parent::__construct($app,$router);


        foreach ($this->middlewareGroups as $key => $middleware) {
            $router->middlewareGroup($key, $middleware);
        }
    }

}