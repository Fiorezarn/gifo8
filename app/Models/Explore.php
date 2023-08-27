<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Explore extends Model
{
    protected $table='postings';

    public function allData()
    {
        return DB::table('postings')->get();
    }
}
