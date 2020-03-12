<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ToursModel extends Model
{
    //
    protected $table = 'tours';

    static function getNearestTour()
    {
        return DB::table('tours')
            ->where('start_at', '>', now())
            ->orderBy('start_at')
            ->limit(1)
            ->get();
    }
}
