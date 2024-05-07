<?php

namespace Programic\AutoAfleveren\Traits;

use Programic\AutoAfleveren\Http\ObjectRequest;

trait HasObjectRequests
{
    public function jobs(): ObjectRequest
    {
        return new ObjectRequest($this, '/jobs');
    }
}
