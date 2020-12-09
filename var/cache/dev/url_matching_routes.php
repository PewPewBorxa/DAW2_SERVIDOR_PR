<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/album' => [[['_route' => 'album_index', '_controller' => 'App\\Controller\\AlbumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/album/new' => [[['_route' => 'album_new', '_controller' => 'App\\Controller\\AlbumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contacto' => [[['_route' => 'contacto_index', '_controller' => 'App\\Controller\\ContactoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contacto/new' => [[['_route' => 'contacto_new', '_controller' => 'App\\Controller\\ContactoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nosotros' => [[['_route' => 'nosotros', '_controller' => 'App\\Controller\\ControllerAbout::about'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\ControllerAdmin::admin'], null, null, null, false, false, null]],
        '/album_details' => [[['_route' => 'album_details', '_controller' => 'App\\Controller\\ControllerAlbumsDetails::albums_details'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\ControllerBase::index'], null, null, null, false, false, null]],
        '/blog' => [[['_route' => 'blog', '_controller' => 'App\\Controller\\ControllerBlog::blog'], null, null, null, false, false, null]],
        '/contacta' => [[['_route' => 'contacta', '_controller' => 'App\\Controller\\ControllerContact::contact'], null, null, null, false, false, null]],
        '/gallery' => [[['_route' => 'gallery', '_controller' => 'App\\Controller\\ControllerGallery::gallery'], null, null, null, false, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\ControllerMain::main'], null, null, null, false, false, null]],
        '/sb' => [[['_route' => 'sb', '_controller' => 'App\\Controller\\ControllerSingleBlog::sb'], null, null, null, false, false, null]],
        '/ticket' => [[['_route' => 'ticket', '_controller' => 'App\\Controller\\ControllerTicket::ticket'], null, null, null, false, false, null]],
        '/tours' => [[['_route' => 'tours', '_controller' => 'App\\Controller\\ControllerTours::tours'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityLoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityLoginController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\addController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/album/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                    .'|(*:208)'
                .')'
                .'|/contacto/([^/]++)(?'
                    .'|(*:238)'
                    .'|/edit(*:251)'
                    .'|(*:259)'
                .')'
                .'|/productos(?:/([^/]++)(?:/([^/]++))?)?(*:306)'
                .'|/user/([^/]++)(?'
                    .'|(*:331)'
                    .'|/edit(*:344)'
                    .'|(*:352)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => 'album_show', '_controller' => 'App\\Controller\\AlbumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        200 => [[['_route' => 'album_edit', '_controller' => 'App\\Controller\\AlbumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        208 => [[['_route' => 'album_delete', '_controller' => 'App\\Controller\\AlbumController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        238 => [[['_route' => 'contacto_show', '_controller' => 'App\\Controller\\ContactoController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'contacto_edit', '_controller' => 'App\\Controller\\ContactoController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [[['_route' => 'contacto_delete', '_controller' => 'App\\Controller\\ContactoController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        306 => [[['_route' => 'productos', 'gen' => 'all', 'pg' => '1', '_controller' => 'App\\Controller\\ControllerAlbums::productos'], ['gen', 'pg'], null, null, false, true, null]],
        331 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        344 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
