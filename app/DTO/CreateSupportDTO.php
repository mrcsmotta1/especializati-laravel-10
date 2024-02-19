<?php

namespace App\DTO;

use App\Http\Requests\StoreUpdateSupport;
use Illuminate\Contracts\Cache\Store;

class CreateSupportDTO
{
    public function __construct(
        public string $subject,
        public string $status,
        public string $body,
    ) {
    }

    public static function makeFromRequest(StoreUpdateSupport $request): self
    {
        return new self(
            $request->subject,
            'a',
            $request->body,
        )
    }
}
