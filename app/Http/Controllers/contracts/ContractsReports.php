<?php

namespace App\Http\Controllers\contracts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 

use DB;

use App\Models\realestates;
class ContractsReports extends Controller
{
    //

    public function  get(){
    
     return realestates::get();
    }
}
