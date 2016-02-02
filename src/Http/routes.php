<?php


// BEGIN Continent
Route::group(['middleware' => ['continentMiddleware']], function () {

    Route::resource('continents', 'ContinentController');

});
// END Continent


// BEGIN Country
Route::group(['middleware' => ['countryMiddleware']], function () {

    Route::resource('countries', 'CountryController');

});
// END Country


// BEGIN PostalDistrict
Route::group(['middleware' => ['postalDistrictMiddleware']], function () {

    Route::resource('postalDistricts', 'PostalDistrictController');

});
// END PostalDistrict


// BEGIN Subdivision
Route::group(['middleware' => ['subdivisionMiddleware']], function () {

    Route::resource('subdivisions', 'SubdivisionController');

});
// END Subdivision


// BEGIN SubdivisionType
Route::group(['middleware' => ['subdivisionTypeMiddleware']], function () {

    Route::get('/subdivisionTypes/{id}/subdivisions', ['uses' => 'SubdivisionTypeController@getSubdivisions',]);

});
// END SubdivisionType