<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Countries;
use App\Models\Origins;
use App\Models\Categories;
class wines extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
        'category_id',
        'origin_id',
    ];

    protected $hidden=['created_at','updated_at'];


    public function country()
    {
        return $this->belongsTo(Countries::class,'country_id');
    }


    public function Origin()
    {
        return $this->belongsTo(Origins::class,'origin_id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class,'category_id');
    }

    public static function MyCountry($pais)
    {
        return self::Where('country_id','=',$pais);
    }

    public static function NoCountry($pais)
    {
        return self::Where('country_id','!=', $pais);
    }

}
