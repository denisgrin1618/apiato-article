<?php

namespace App\Containers\TestSection\Article\UI\API\Transformers;

use App\Containers\TestSection\Article\Models\Article;
use App\Ship\Parents\Transformers\Transformer;

class ArticleTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    public function transform(Article $article): array
    {
        $response = [
            'object' => $article->getResourceKey(),
            'id' => $article->getHashedKey(),
            'created_at' => $article->created_at,
            'updated_at' => $article->updated_at,
            'readable_created_at' => $article->created_at->diffForHumans(),
            'readable_updated_at' => $article->updated_at->diffForHumans(),

        ];

        return $response = $this->ifAdmin([
            'real_id'    => $article->id,
            // 'deleted_at' => $article->deleted_at,
        ], $response);
    }
}
