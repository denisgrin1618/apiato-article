<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::post('articles/store', [Controller::class, 'store'])
    ->name('web_article_store')
    ->middleware(['auth:web']);

