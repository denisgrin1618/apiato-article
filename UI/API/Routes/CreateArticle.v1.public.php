<?php

/**
 * @apiGroup           Article
 * @apiName            createArticle
 *
 * @api                {POST} /v1/articles Endpoint title here..
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

Route::post('articles', [Controller::class, 'createArticle'])
    ->name('api_article_create_article')
    ->middleware(['auth:api']);

