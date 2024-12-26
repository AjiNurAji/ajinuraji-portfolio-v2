<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = "sites";

    protected $fillable = [
        "site_name",
        "is_maintenance"
    ];
}
