<?php

namespace App\Containers\TestSection\Article\UI\WEB\Controllers;

use App\Containers\TestSection\Article\UI\WEB\Requests\CreateArticleRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\DeleteArticleRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\GetAllArticlesRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\FindArticleByIdRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\UpdateArticleRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\StoreArticleRequest;
use App\Containers\TestSection\Article\UI\WEB\Requests\EditArticleRequest;
use App\Containers\TestSection\Article\Actions\CreateArticleAction;
use App\Containers\TestSection\Article\Actions\FindArticleByIdAction;
use App\Containers\TestSection\Article\Actions\GetAllArticlesAction;
use App\Containers\TestSection\Article\Actions\UpdateArticleAction;
use App\Containers\TestSection\Article\Actions\DeleteArticleAction;
use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{
    public function index(GetAllArticlesRequest $request)
    {
        $articles = app(GetAllArticlesAction::class)->run($request);
        // ..
    }

    public function show(FindArticleByIdRequest $request)
    {
        $article = app(FindArticleByIdAction::class)->run($request);
        // ..
    }

    public function create(CreateArticleRequest $request)
    {
        // ..
    }

    public function store(StoreArticleRequest $request)
    {
        $article = app(CreateArticleAction::class)->run($request);
        // ..
    }

    public function edit(EditArticleRequest $request)
    {
        $article = app(FindArticleByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateArticleRequest $request)
    {
        $article = app(UpdateArticleAction::class)->run($request);
        // ..
    }

    public function destroy(DeleteArticleRequest $request)
    {
         $result = app(DeleteArticleAction::class)->run($request);
         // ..
    }
}
