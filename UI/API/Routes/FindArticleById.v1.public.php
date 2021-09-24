<?php

/**
 * @apiGroup           Article
 * @apiName            findArticleById
 *
 * @api                {GET} /v1/articles/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

use App\Containers\TestSection\Article\UI\API\Controllers\Controller;
use Illuminate\Support\Facades\Route;

Route::get('articles/{id}', [Controller::class, 'findArticleById'])
    ->name('api_article_find_article_by_id')
    ->middleware(['auth:api']);

