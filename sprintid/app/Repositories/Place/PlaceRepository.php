<?php

namespace App\Repositories\Place;

use App\Models\Place;
use App\Repositories\Base\BaseRepository;

class PlaceRepository extends BaseRepository
{
    public function __construct(Place $place)
    {
        $this->model = $place;
    }

}
