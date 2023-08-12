<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('perusahaan', PerusahaanController::class);
    $router->resource('direktori', DirektoriPenelitianController::class);
    $router->resource('anggaran', AnggaranController::class);
    $router->resource('pengajuan', PengajuanController::class);
});
