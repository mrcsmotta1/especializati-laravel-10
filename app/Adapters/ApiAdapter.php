<?php

namespace App\Adapters;

use App\Http\Resources\DefaultResource;
use App\Repositories\PaginationInterface;

class ApiAdapter
{
    public static function toJson(
        PaginationInterface $data
    )
    {
        return DefaultResource::collection($data->items())
        ->additional([
            'meta' => [
                'total'=> $data->total(),
                'isFirst_page'=> $data->isFirstPage(),
                'isLast_page'=> $data->isLastPage(),
                'current_page'=> $data->currentPage(),
                'next_page'=> $data->getNumberNextPage(),
                'previous_page'=> $data->getNumberPreviousPage(),
            ]
        ]);

    }
}
