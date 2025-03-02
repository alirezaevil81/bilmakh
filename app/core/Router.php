<?php

namespace Alireza\Bilmakh\core;

use FastRoute\RouteCollector;
use FastRoute\Dispatcher;
use FastRoute;
class Router
{
    // لیست مسیرها
    protected static $routes = [];

    /**
     * تعریف یک مسیر GET
     */
    public static function get($uri, $handler)
    {
        self::addRoute('GET', $uri, $handler);
    }

    /**
     * تعریف یک مسیر POST
     */
    public static function post($uri, $handler)
    {
        self::addRoute('POST', $uri, $handler);
    }

    /**
     * تعریف یک مسیر PUT
     */
    public static function put($uri, $handler)
    {
        self::addRoute('PUT', $uri, $handler);
    }

    /**
     * تعریف یک مسیر DELETE
     */
    public static function delete($uri, $handler)
    {
        self::addRoute('DELETE', $uri, $handler);
    }

    /**
     * اضافه کردن مسیر به لیست مسیرها
     */
    protected static function addRoute($method, $uri, $handler)
    {
        self::$routes[] = [$method, $uri, $handler];
    }

    /**
     * اجرای مسیرها و فراخوانی کنترلر مناسب
     */
    public static function dispatch()
    {
        $dispatcher = FastRoute\simpleDispatcher(function(RouteCollector $r) {
            foreach (self::$routes as $route) {
                $r->addRoute($route[0], $route[1], $route[2]);
            }
        });

        // دریافت متد و URI درخواست
        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri = $_SERVER['REQUEST_URI'];

        // حذف query string از URI
        if (($pos = strpos($uri, '?')) !== false) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        // مسیریابی درخواست
        $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

        // پردازش نتیجه مسیریابی
        switch ($routeInfo[0]) {
            case Dispatcher::NOT_FOUND:
                echo '404 Not Found';
                break;
            case Dispatcher::METHOD_NOT_ALLOWED:
                echo '405 Method Not Allowed';
                break;
            case Dispatcher::FOUND:
                $handler = $routeInfo[1]; // کنترلر و متد
                $vars = $routeInfo[2];    // پارامترهای مسیر

                // فراخوانی کنترلر و متد
                self::callHandler($handler, $vars);
                break;
        }
    }

    /**
     * فراخوانی کنترلر و متد
     */
    protected static function callHandler($handler, $vars = [])
    {
        if (is_array($handler)) {
            list($class, $method) = $handler;
            $controller = new $class;
            call_user_func_array([$controller, $method], $vars);
        } elseif (is_callable($handler)) {
            call_user_func_array($handler, $vars);
        } else {
            throw new \Exception("Invalid handler provided.");
        }
    }
}