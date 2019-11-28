<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Repositories\ListingMasterRepository;

class MasterController extends Controller
{
    private $master;
    public function __construct(ListingMasterRepository $master)
    {
        $this->master = $master;
    }


    public function getMasters()
    {
        return $this->master->listing(request()->listing);
    }
}
