<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'dbo.suppliers';

    protected $fillable = [
        'name',
    ];
}
