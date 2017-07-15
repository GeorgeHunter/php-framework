<?php

return [
    ['GET', '/', ['App\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['App\Controllers\Page', 'show']],
//    ['GET', '/another-route', function () {
//        echo 'This works too';
//    }],
];