<?php

use Illuminate\Support\Facades\Route;
use App\Models\Wines;
use App\Models\Countries;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
/*
route::get('/wines',function(){  //devuelve todos los vinos
        return wines::all();

});

route::get('/wines/{id}',function($id){ //devuelve el registro de wines del id que le pasamos
    return wines::find($id);

});

route::get('/countries',function(){
    return countries::all();

});

route::get('/countries/{id}',function($id){
    return countries::find($id);

});


route::get('/wines',function(){  //devuelve todos los vinos con las subtablas
    return wines::with('country','category','origin')->get();

});

route::get('/wines/{country}/{origin}',function($cty,$ori){ // devuelve los vinos del pais y con el origen que le pasamos
    return wines::with('country','category','origin')->where('country_id','=',$cty)->where('origin_id','=',$ori)->get();

});


route::get('/wines/{country}',function($idpais){
    return wines::MyCountry($idpais)->get();  // MyContry está en el modelo wines. (wines es la clase y mycountry  es la función)
});


route::get('/wines/{country}',function($idpais){
    return wines::NoCountry($idpais)->with('country')->get(); // filtramos los que no son del $idpais y mostramos el país.
});

//Ejemplo para no usar los modelos, directamente haciendo un Select contra la base de datos
route::get('/wines/{country}',function($country){
    return  DB::table('wines')->select('name','country_id')->where(['country_id'=>$country])->get();
});

route::get('/wines',function(){ // join entre vinos y countries
    return DB::table('wines')->join('countries','wines.country_id','=','countries.id')->select('wines.name','countries.country')->get();
});
*/
//usando una variable

route::get('/wines',function(){ // join entre vinos y countries
    $wines= DB::table('wines')->join('countries','wines.country_id','=','countries.id')->select('wines.name','countries.country')->get();
    return $wines;
});
