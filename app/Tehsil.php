<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tehsil extends Model
{
    protected $table = "master_tehsils";

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'branch_name', 'branch_code', 'status'
    ];
}
