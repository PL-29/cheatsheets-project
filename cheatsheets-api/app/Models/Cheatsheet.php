<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheatsheet extends Model
{
    use HasFactory;

    protected $fillable = ['title','code_snippet','explanation','public','author_id','technology_id','topic_id','technology_version_id'];
}
