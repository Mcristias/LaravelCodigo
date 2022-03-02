<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wines;
class countries extends Model
{
    use HasFactory;
    protected $fillable = [
        'country',        
    ];

    protected $hidden=['created_at','updated_at'];

    
    public function wine()
    {
        return $this->hasOne(wines::class,'id');
    }
}
