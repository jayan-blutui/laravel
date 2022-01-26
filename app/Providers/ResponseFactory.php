<?php

namespace App\Providers;

use Illuminate\Routing\Redirector;
use Illuminate\Routing\ResponseFactory as Factory;

class ResponseFactory extends Factory
{
    /**
     * Create a new response factory instance.
     *
     * @param  \Illuminate\Routing\Redirector  $redirector
     * @return void
     */
    public function __construct(Redirector $redirector)
    {
        $this->redirector = $redirector;
    }
}
