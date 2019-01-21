<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\Data;

class DataController extends Controller
{
    public function store()
    {
    	$data = new Data;

    	$data->match_num = request();
    	$data->team_num = request();
    	$table->alliance = request();
    	$data->starting_point = request();
    	$data->driving_sandstorm_type = request();
    	$data->rocket_hatches = request();
    	$data->rocket_balls = request();
    	$data->cargo_hatches = request();
    	$data->cargo_balls = request();
    	$data->end_position = request();
    	$data->red_score = request();
    	$data->blue_score = request();
    	$data->end_status = request();

    	$data->save();

    }
}
