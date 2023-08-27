<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Explore extends Model
{
    protected $table='postings';

    public function detailCategories($categories)
    {
        return DB::table('postings')->where('categories', $categories)->get();
    }
}
