<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function landing_page()
    {
        // TODO: packages nya filter juga bahwa user masih dapat mendapatkannya setelah
        // mengecek package dimaksud limitnya sekian.
        $packages = Package::where(['is_active' => true])->get();
        // dd($packages);

        return view('home', compact('packages'));
    }
}
