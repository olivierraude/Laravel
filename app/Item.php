<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['title', 'artist', 'price', 'label', 'year', 'description', 'image'];
}
