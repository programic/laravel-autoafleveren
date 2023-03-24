<?php

namespace Programic\AutoAfleveren\Traits;

use Programic\AutoAfleveren\Http\ObjectRequest;

trait HasObjectRequests
{
    public function users(): ObjectRequest
    {
        return new ObjectRequest($this, '/users');
    }

    public function documents(int $userId): ObjectRequest
    {
        return new ObjectRequest($this, "/users/{$userId}/documents");
    }
}
