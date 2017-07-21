<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class HealthController extends Controller
{
    public function status()
    {
      return "Health: Alive";
    }
}