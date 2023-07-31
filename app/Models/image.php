<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function imageable(){
        return $this->morphTo();
    }
}
