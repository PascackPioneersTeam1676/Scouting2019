<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'match_num', 'team_num', 'alliance', 'starting_point', 'driving_sandstorm_type', 'rocket_hatches', 'rocket_balls', 'cargo_hatches',
        'cargo_balls', 'end_position', 'red_score', 'blue_score', 'end_score'
    ];
}
