<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Configuration;
use Illuminate\Support\Facades\File;

class AppController extends Controller
{

    public function welcome()
    {
        $check = Configuration::findOrFail(1);
        if ($check->notConfigured()) {
            File::ensureDirectoryExists('../routes/apps');  /* Check Routes app folder */
            File::ensureDirectoryExists('../app/Http/Controllers/apps');  /* Check Public app folder */
            File::ensureDirectoryExists('../public/apps');  /* Check Public app folder */
            $check->configured();
        }

        $apps = App::all();

        return view("welcome", compact("apps"));
    }
}
