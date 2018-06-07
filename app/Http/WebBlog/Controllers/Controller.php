<?php

namespace App\Http\WebBlog\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Api\Contracts\ApiContract;

class Controller extends BaseController
{

    protected $api;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiContract $api)
    {
        $this->api = $api;
    }
}
