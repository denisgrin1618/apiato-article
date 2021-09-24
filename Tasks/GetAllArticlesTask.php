<?php

namespace App\Containers\TestSection\Article\Tasks;

use App\Containers\TestSection\Article\Data\Repositories\ArticleRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllArticlesTask extends Task
{
    protected ArticleRepository $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
