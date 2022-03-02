<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wines;

class origins extends Model
{
    use HasFactory;

    protected $fillable = [
        'origin',        
    ];
    protected $hidden=['created_at','updated_at'];

    public function wine()
    {
        return $this->hasOne(wines::class,'id');
    }
}
