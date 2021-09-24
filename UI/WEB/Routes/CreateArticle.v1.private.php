<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('articles/create', [Controller::class, 'create'])
    ->name('web_article_create')
    ->middleware(['auth:web']);

