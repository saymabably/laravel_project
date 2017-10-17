<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sa_la_Category extends Model
{
   protected $fillable = ['categoryName', 'categoryDescription', 'publicationStatus'];
}
