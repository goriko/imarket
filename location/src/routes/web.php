<?php

$route = env('PACKAGE_ROUTE', '').'/locations/';
$controller = 'Increment\Imarket\Location\Http\LocationController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'delete', $controller."delete");
Route::post($route.'add_scope', $controller."addLocationScope");
Route::post($route.'get_scope', $controller."getLocationScope");
Route::get($route.'test', $controller."test");
