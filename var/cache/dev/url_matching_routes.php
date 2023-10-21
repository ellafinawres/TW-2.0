<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/author' => [[['_route' => 'app_author', '_controller' => 'App\\Controller\\AuthorController::index'], null, null, null, false, false, null]],
        '/listAuthor' => [[['_route' => 'list_author', '_controller' => 'App\\Controller\\AuthorController::list'], null, null, null, false, false, null]],
        '/listAuthors' => [[['_route' => 'list_authors', '_controller' => 'App\\Controller\\AuthorController::listauthor'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\AuthorController::add'], null, null, null, false, false, null]],
        '/book' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, false, false, null]],
        '/listBooks' => [[['_route' => 'list_books', '_controller' => 'App\\Controller\\BookController::listbook'], null, null, null, false, false, null]],
        '/addbook' => [[['_route' => 'addbook', '_controller' => 'App\\Controller\\BookController::add'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'homeEtudiant', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/gotoindex' => [[['_route' => 'app_index', '_controller' => 'App\\Controller\\ServiceController::goToIndex'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/home/([^/]++)(*:21)'
                .'|/de(?'
                    .'|tailsAuthor/([^/]++)(*:54)'
                    .'|lete(?'
                        .'|/([^/]++)(*:77)'
                        .'|Book/([^/]++)(*:97)'
                    .')'
                .')'
                .'|/update(?'
                    .'|1/([^/]++)(*:126)'
                    .'|Book/([^/]++)(*:147)'
                .')'
                .'|/s(?'
                    .'|howBook/([^/]++)(*:177)'
                    .'|ervice(?'
                        .'|1/([^/]++)(*:204)'
                        .'|/([^/]++)(*:221)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:262)'
                    .'|wdt/([^/]++)(*:282)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:328)'
                            .'|router(*:342)'
                            .'|exception(?'
                                .'|(*:362)'
                                .'|\\.css(*:375)'
                            .')'
                        .')'
                        .'|(*:385)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'show_author', '_controller' => 'App\\Controller\\AuthorController::show'], ['name'], null, null, false, true, null]],
        54 => [[['_route' => 'details_author', '_controller' => 'App\\Controller\\AuthorController::auhtorDetails'], ['id'], null, null, false, true, null]],
        77 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\AuthorController::deleteAuthor'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'deleteBook', '_controller' => 'App\\Controller\\BookController::deleteBook'], ['ref'], null, null, false, true, null]],
        126 => [[['_route' => 'update1', '_controller' => 'App\\Controller\\AuthorController::update'], ['id'], null, null, false, true, null]],
        147 => [[['_route' => 'updateBooks', '_controller' => 'App\\Controller\\BookController::update'], ['ref'], null, null, false, true, null]],
        177 => [[['_route' => 'showBook', '_controller' => 'App\\Controller\\BookController::showBook'], ['ref'], null, null, false, true, null]],
        204 => [[['_route' => 'ShowService', '_controller' => 'App\\Controller\\ServiceController::showService1'], ['name'], null, null, false, true, null]],
        221 => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::showService'], ['name'], null, null, false, true, null]],
        262 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        282 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        328 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        342 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        362 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        375 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        385 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
