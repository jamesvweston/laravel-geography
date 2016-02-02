<?php

namespace app\Http\Geography;


class Kernel
{

    protected $routeMiddleware = [
        'addressMiddleware'                     =>      \app\Http\Middleware\Geography\AddressMiddleware::class,
        'continentMiddleware'                   =>      \app\Http\Middleware\Geography\ContinentMiddleware::class,
        'countryMiddleware'                     =>      \app\Http\Middleware\Geography\CountryMiddleware::class,
        'postalDistrictMiddleware'              =>      \app\Http\Middleware\Geography\PostalDistrictMiddleware::class,
        'postalDistrictSubdivisionMiddleware'   =>      \app\Http\Middleware\Geography\PostalDistrictSubdivisionMiddleware::class,
        'subdivisionAltNameMiddleware'          =>      \app\Http\Middleware\Geography\SubdivisionAltNameMiddleware::class,
        'subdivisionMiddleware'                 =>      \app\Http\Middleware\Geography\SubdivisionMiddleware::class,
        'subdivisionTypeMiddleware'             =>      \app\Http\Middleware\Geography\SubdivisionTypeMiddleware::class,
    ];

}