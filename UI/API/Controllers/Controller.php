<?php

namespace App\Containers\TestSection\Article\UI\API\Controllers;

use App\Containers\TestSection\Article\UI\API\Requests\CreateArticleRequest;
use App\Containers\TestSection\Article\UI\API\Requests\DeleteArticleRequest;
use App\Containers\TestSection\Article\UI\API\Requests\GetAllArticlesRequest;
use App\Containers\TestSection\Article\UI\API\Requests\FindArticleByIdRequest;
use App\Containers\TestSection\Article\UI\API\Requests\UpdateArticleRequest;
use App\Containers\TestSection\Article\UI\API\Transformers\ArticleTransformer;
use App\Containers\TestSection\Article\Actions\CreateArticleAction;
use App\Containers\TestSection\Article\Actions\FindArticleByIdAction;
use App\Containers\TestSection\Article\Actions\GetAllArticlesAction;
use App\Containers\TestSection\Article\Actions\UpdateArticleAction;
use App\Containers\TestSection\Article\Actions\DeleteArticleAction;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class Controller extends ApiController
{
    public function createArticle(CreateArticleRequest $request): JsonResponse
    {
        $article = app(CreateArticleAction::class)->run($request);
        return $this->created($this->transform($article, ArticleTransformer::class));
    }

    public function findArticleById(FindArticleByIdRequest $request): array
    {
        $article = app(FindArticleByIdAction::class)->run($request);
        return $this->transform($article, ArticleTransformer::class);
    }

    public function getAllArticles(GetAllArticlesRequest $request): array
    {
        $articles = app(GetAllArticlesAction::class)->run($request);
        return $this->transform($articles, ArticleTransformer::class);
    }

    public function updateArticle(UpdateArticleRequest $request): array
    {
        $article = app(UpdateArticleAction::class)->run($request);
        return $this->transform($article, ArticleTransformer::class);
    }

    public function deleteArticle(DeleteArticleRequest $request): JsonResponse
    {
        app(DeleteArticleAction::class)->run($request);
        return $this->noContent();
    }
}
