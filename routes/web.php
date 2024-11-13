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
        /* Home */
        // Route::get('/', 'FrontendController@portada')->name('frontend.portada.index');
        /* Equip */
        Route::get('/equip-docent', 'FrontendController@equip')->name('frontend.equip.index');
        /* Historia */
        Route::get('/historia-escola-30-pasos', 'FrontendController@historia')->name('frontend.histories.index');
        /* Escola familia */
        Route::get('/escola-familia', 'FrontendController@escolaFamilia')->name('frontend.escolaFamilies.index');
        /* Projecte educatiu */
        Route::get('/projecte-educatiu-del-centre', 'FrontendController@projecteEducatiu')->name('frontend.projecteEducatiu.index');
        /* Instal·lacions */
        Route::get('/instalacions-escola-30-pasos', 'FrontendController@instalacions')->name('frontend.instalacions.index');
        /* Menú migdia */
        Route::get('/menu-migdia', 'FrontendController@menus')->name('frontend.menus.index');
        /* Notícies */
        Route::get('/noticies-escola-30-pasos/{year?}', 'FrontendController@noticies')->name('frontend.noticies.index');
        Route::get('/noticies-escola-30-pasos/detall/{noticia}', 'FrontendController@showNoticia')->name('frontend.noticies.show');
        /* Projectes */
        Route::get('/projectes-actius-escola-30-pasos', 'FrontendController@projectes')->name('frontend.projectes.index');
        Route::get('/projectes-actius-escola-30-pasos/detall/{projecte}', 'FrontendController@showProjecte')->name('frontend.projectes.show');
        /* Calendari */
        Route::get('/calendari-escola-30-pasos', 'FrontendController@calendari')->name('frontend.calendari.index');
        /* Consell escolar */
        Route::get('/consell-escolar', 'FrontendController@consellEscolar')->name('frontend.consellEscolar.index');
        /* Serveis educatius */
        Route::get('/serveis-educatius/{servei}', 'FrontendController@serveisEducatius')->name('frontend.serveisEducatius.index');
        /* Documents centre */
        Route::get('/documents-centre', 'FrontendController@documentsCentre')->name('frontend.documentsCentre.index');
        /* Contacte */
        Route::get('/contacte', 'FrontendController@contacte')->name('frontend.contacte.index');
        Route::post('/contacte/enviat', 'FrontendController@sendEmail')->name('frontend.sendMail');
        /* Avís legal */
        Route::get('/politica-cookies', 'FrontendController@cookies')->name('frontend.legal.politica-cookies.index');
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