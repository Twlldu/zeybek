<?php

namespace app\core;

use Exception;

defined('BASEPATH') or exit('No direct script access allowed');

class Core_middleware
{
    public function handle(array $middlewares)
    {
        foreach ($middlewares as $middleware) {
            $middlewareClass = "\\app\\middleware\\" . str_replace('/', '\\', $middleware);
            if (class_exists($middlewareClass)) {
                $middlewareInstance = new $middlewareClass();
                if (method_exists($middlewareInstance, 'handle')) {
                    $middlewareInstance->handle(); // Middleware’in handle() metodunu çalıştır
                } else {
                    throw new Exception("Middleware {$middleware} içinde handle metodu bulunamadı.");
                }
            } else {
                throw new Exception("Middleware sınıfı {$middleware} bulunamadı.");
            }
        }
    }
}