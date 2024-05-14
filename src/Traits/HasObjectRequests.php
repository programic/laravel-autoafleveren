<?php

namespace Programic\AutoAfleveren\Traits;

use Programic\AutoAfleveren\Http\ObjectRequest;

trait HasObjectRequests
{
    public function jobs(int $companyId): ObjectRequest
    {
        return new ObjectRequest($this, "/$companyId/jobs");
    }
}
