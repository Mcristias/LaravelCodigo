<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wines;
class categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',        
    ];

    protected $hidden=['created_at','updated_at'];
    public function wine()
    {
        return $this->hasOne(wines::class,'id');
    }
}
