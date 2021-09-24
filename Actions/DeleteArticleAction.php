<?php

namespace App\Containers\TestSection\Article\Actions;

use App\Containers\TestSection\Article\Tasks\DeleteArticleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteArticleAction extends Action
{
    public function run(Request $request)
    {
        return app(DeleteArticleTask::class)->run($request->id);
    }
}
