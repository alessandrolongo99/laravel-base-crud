<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'description',
        'thumb',
        'price',
        'series',
        'sale_date',
        'type'
    ];
    // protected $fillable = ['description'];
    // protected $fillable = ['thumb'];
    // protected $fillable = ['price'];
    // protected $fillable = ['series'];
    // protected $fillable = ['sale_date'];
    // protected $fillable = ['type'];
}
