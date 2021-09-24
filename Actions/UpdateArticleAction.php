<?php

namespace App\Containers\TestSection\Article\Actions;

use App\Containers\TestSection\Article\Models\Article;
use App\Containers\TestSection\Article\Tasks\UpdateArticleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class UpdateArticleAction extends Action
{
    public function run(Request $request): Article
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateArticleTask::class)->run($request->id, $data);
    }
}
