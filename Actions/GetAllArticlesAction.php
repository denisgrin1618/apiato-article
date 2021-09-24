<?php

namespace App\Containers\TestSection\Article\Actions;

use App\Containers\TestSection\Article\Tasks\GetAllArticlesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetAllArticlesAction extends Action
{
    public function run(Request $request)
    {
        return app(GetAllArticlesTask::class)->addRequestCriteria()->run();
    }
}
