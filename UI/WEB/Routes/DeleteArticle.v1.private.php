<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::delete('articles/{id}', [Controller::class, 'destroy'])
    ->name('web_article_destroy')
    ->middleware(['auth:web']);

