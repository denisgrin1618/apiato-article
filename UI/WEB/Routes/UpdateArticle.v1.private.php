<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::patch('articles/{id}', [Controller::class, 'update'])
    ->name('web_article_update')
    ->middleware(['auth:web']);

