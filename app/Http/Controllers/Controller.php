<?php 

namespace App\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class Controller extends Controller
{
    public function welcomePage() {
        return view('welcome');
    }

    // Page Specific
//     public function homeController() {
//         return view('ui.home');
//     }
//     public function aboutController() {
//         return view('ui.about');
// }
}