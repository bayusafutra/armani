<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\MakananKhas;

class BelajarController extends Controller
{
    public function nyoba(){
        $test = DB::select("SELECT name_makanan from provinces where province_id=1;");
    }
}
