<?php

namespace App\Containers\TestSection\Article\Actions;

use App\Containers\TestSection\Article\Models\Article;
use App\Containers\TestSection\Article\Tasks\FindArticleByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class FindArticleByIdAction extends Action
{
    public function run(Request $request): Article
    {
        return app(FindArticleByIdTask::class)->run($request->id);
    }
}
