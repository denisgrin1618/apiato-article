<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('articles', [Controller::class, 'index'])
    ->name('web_article_index')
    ->middleware(['auth:web']);

