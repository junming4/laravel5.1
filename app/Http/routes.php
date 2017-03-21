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

    //邮箱部分
    $route->get('mail/index',['as'=>'admin.mail.index','uses'=>'MailController@index']);
    $route->get('mail/show',['as'=>'admin.mail.show','uses'=>'MailController@show']);
    $route->get('mail/create',['as'=>'admin.mail.create','uses'=>'MailController@create']);

    //表单部分
    $route->get('form/basic',['as'=>'admin.form.basic','uses'=>'FormController@basic']);
    $route->get('form/validates',['as'=>'admin.form.validates','uses'=>'FormController@validates']);
    $route->get('form/advanced',['as'=>'admin.form.advanced','uses'=>'FormController@advanced']);
    $route->get('form/wizard',['as'=>'admin.form.wizard','uses'=>'FormController@wizard']);
    $route->get('form/upload/webuploader',['as'=>'admin.form.upload.webuploader','uses'=>'FormController@uploadWebUploader']);
    $route->get('form/upload/dropzone',['as'=>'admin.form.upload.dropzone','uses'=>'FormController@uploadDropZone']);
    //编辑器部分
    $route->get('form/editors/summer',['as'=>'admin.form.editors.summer','uses'=>'FormController@editorsSummer']);
    $route->get('form/editors/sim',['as'=>'admin.form.editors.sim','uses'=>'FormController@editorsSim']);
    $route->get('form/editors/markdown',['as'=>'admin.form.editors.markdown','uses'=>'FormController@editorsMarkdown']);
    $route->get('form/editors/code',['as'=>'admin.form.editors.code','uses'=>'FormController@editorsCode']);
    $route->get('form/layerdate',['as'=>'admin.form.layerdate','uses'=>'FormController@layerDate']);

});
