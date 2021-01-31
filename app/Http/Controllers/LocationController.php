<?php

namespace App\Http\Controllers;
use App\Location;
use Illuminate\Http\Request;

use App\Http\Controllers\Traits\CrudActions;

class LocationController extends Controller
{
    const MODEL = Location::class;
    use CrudActions;
}
