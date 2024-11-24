<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{
    use HasFactory;

    protected $table = "paslon";
    protected $guarded = [];

    public function suara()
    {
        return $this->hasMany(Suara::class, "paslon_id", "id");
    }
}
