<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entity\Flight;

class FlightController extends Controller
{
    //获取模型 all()
    public function getModel(){
        $flights = Flight::all();
        foreach ($flights as $flight){
            echo $flight->name;
            echo '<br>';
        }
    }

    //添加额外的约束
    public function extraConstraint(){
        $flights = Flight::where('active',1)
            ->orderBy('name','desc')
            ->take(10)
            ->get();
    }

    //集合
    public 
}
