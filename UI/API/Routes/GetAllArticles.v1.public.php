<?php

/**
 * @apiGroup           Article
 * @apiName            getAllArticles
 *
 * @api                {GET} /v1/articles Endpoint title here..
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

Route::get('articles', [Controller::class, 'getAllArticles'])
    ->name('api_article_get_all_articles')
    ->middleware(['auth:api']);

