<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    //
    protected $table = "master_components";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'default_qty', 'status'
    ];
}
