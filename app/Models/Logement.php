<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logement extends Model
{
    use HasFactory;

    protected $fillable = ['nom','lieu','prix','superficie' , 'lit' ,'douche','description','garage' ,'image1','image2', 'image3' , 'path1','path2' , 'path3'] ;
}
