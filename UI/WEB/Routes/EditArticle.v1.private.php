<?php

use App\Containers\TestSection\Article\UI\WEB\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('articles/{id}/edit', [Controller::class, 'edit'])
    ->name('web_article_edit')
    ->middleware(['auth:web']);

