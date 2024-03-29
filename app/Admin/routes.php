<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    $router->resource('about', AboutMeController::class);
    $router->resource('information', InformationController::class);
    $router->resource('users', PersonalInformationController::class);
    $router->resource('article', ArticleController::class);
    $router->resource('share', ShareController::class);
    $router->resource('resume', ResumeController::class);
    $router->resource('project', ProjectController::class);
    $router->resource('address', AddressController::class);
    $router->resource('commodity', CommodityController::class);
    $router->resource('order', OrderController::class);
});
