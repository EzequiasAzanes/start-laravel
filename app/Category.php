<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Models\Category;
class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey = "id";
    public $timestamp = "true";
}
