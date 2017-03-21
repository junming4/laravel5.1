<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return $environment = app()->environment() . '||' . getenv('APP_ENV');
});


Route::get('article', 'ArticleController@index');


//后台部分
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function ($route) {
    $route->get('/', ['as' => 'admin.index', 'uses' => 'DashboardController@index']);

    //图标，走势图
    $route->get('chart/echats',['as'=>'admin.chart.echats','uses' =>'ChartController@eCharts']);
    $route->get('chart/flots',['as'=>'admin.chart.flots','uses' =>'ChartController@flots']);
    $route->get('chart/morris',['as'=>'admin.chart.morris','uses' =>'ChartController@morris']);
    $route->get('chart/rickshaws',['as'=>'admin.chart.rickshaws','uses' =>'ChartController@rickshaws']);
    $route->get('chart/peities',['as'=>'admin.chart.peities','uses' =>'ChartController@peities']);
    $route->get('chart/sparklines',['as'=>'admin.chart.sparklines','uses' =>'ChartController@sparklines']);
    $route->get('chart/metrics',['as'=>'admin.chart.metrics','uses' =>'ChartController@metrics']);

});
