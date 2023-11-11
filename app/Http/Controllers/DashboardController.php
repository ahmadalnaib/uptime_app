<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
 
class DashboardController extends Controller
{
    //

    public function __invoke()
    {
        return inertia()->render('Dashboard',[
            'site'=> Site::find(1)
        ]);
    }
}
