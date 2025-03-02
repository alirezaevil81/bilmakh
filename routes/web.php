<?php

use Alireza\Bilmakh\core\Router;
use Alireza\Bilmakh\controller\HomeController;

Router::get('/', [HomeController::class, 'index']);
Router::get('/users', [HomeController::class, 'users']);
Router::get('/signup',[HomeController::class,'signup']);
Router::get('/question/{id}',[HomeController::class,'question']);
Router::get('/end',[HomeController::class,'end']);

Router::post('/start',[HomeController::class,'start']);
Router::post('/restart',[HomeController::class,'restart']);
Router::post('/switch',[HomeController::class,'switch']);


