<?php

namespace App\Containers\TestSection\Article\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

class ArticleRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
