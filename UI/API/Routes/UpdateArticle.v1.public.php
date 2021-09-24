<?php

/**
 * @apiGroup           Article
 * @apiName            updateArticle
 *
 * @api                {PATCH} /v1/articles/:id Endpoint title here..
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

Route::patch('articles/{id}', [Controller::class, 'updateArticle'])
    ->name('api_article_update_article')
    ->middleware(['auth:api']);

