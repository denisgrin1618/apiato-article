<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('articles/{id}', [Controller::class, 'show'])
    ->name('web_article_show')
    ->middleware(['auth:web']);

