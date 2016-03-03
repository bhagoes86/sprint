<?php

namespace App\Repositories\Print;

use App\Models\Print;
use App\Repositories\Base\BaseRepository;

class PrintRepository extends BaseRepository
{
    public function __construct(Print $print)
    {
        $this->model = $print;
    }

}
