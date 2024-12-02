<?php

use Illuminate\Support\Facades\Route;

// FrontEnd //

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        /* Home */
        Route::get('/', 'FrontendController@home')->name('frontend.home.index');

        /* Empresa */
        Route::get('/empresa', 'FrontendController@empresa')->name('frontend.empresa.index');

        /* Empresa */
        Route::get('/productos', 'FrontendController@productos')->name('frontend.productos.index');

        /* Fotovoltaica para viviendas */
        Route::get('/fotovoltaica-para-viviendas', 'FrontendController@fotovoltaicaViviendas')->name('frontend.fotovoltaicaViviendas.index');

        /* Fotovoltaica para empresas */
        Route::get('/fotovoltaica-para-empresas', 'FrontendController@fotovoltaicaEmpresas')->name('frontend.fotovoltaicaEmpresas.index');

        /* Projectes */
        Route::get('/proyectos-solarcat', 'FrontendController@projectes')->name('frontend.projectes.index');
        Route::get('/projectes-solarcat/{projecte}', 'FrontendController@showProjecte')->name('frontend.projectes.show');

        /* Contacte */
        Route::get('/contacte', 'FrontendController@contacte')->name('frontend.contacte.index');
        Route::post('/contacte/enviat', 'FrontendController@sendEmail')->name('frontend.sendMail');
        
});

        /* Sitemap */
        Route::get('/sitemap.xml', 'SitemapController@index');
        Route::get('/sitemap.xml/statics', 'SitemapController@statics');
        Route::get('/sitemap.xml/noticies', 'SitemapController@noticies');
        Route::get('/sitemap.xml/projectes', 'SitemapController@projectes');

// BackEnd //

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::group(['middleware' => ['auth']], function() {
    /* Inici */
    Route::get('backend/inici', 'HomeBackendController@index')->name('backend.inici.index');

    /* Projectes */
    Route::get('backend/projectes', 'ProjectesController@index')->name('backend.projectes.index');
    Route::get('backend/projectes/create', 'ProjectesController@create')->name('backend.projectes.create');
    Route::post('backend/projectes', 'ProjectesController@store')->name('backend.projectes.store');
    Route::get('backend/projectes/{projecte}/edit', 'ProjectesController@edit')->name('backend.projectes.edit');
    Route::put('backend/projectes/{projecte}', 'ProjectesController@update')->name('backend.projectes.update');
    Route::delete('backend/projectes/{projecte}', 'ProjectesController@destroy')->name('backend.projectes.destroy');

});