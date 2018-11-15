<?php

use Illuminate\Http\Request;
use App\Passport;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('passports', function()
{
    return Passport::all();
});

Route::get('passports/{id}', function($id)
{
    return Passport::find($id);
});

Route::post('passports', function(Request $request)
{
    return Passport::create($request->all());
});

Route::put('passports/{id}', function(Request $request, $id)
{
    $passport = Passport::findOrFail($id);
    $passport->update($request->all());

    return $passport;
});

Route::delete('passports/{id}', function(Request $request, $id)
{
    $passport = Passport::findOrFail($id);
    $passport->delete();

    return response()->json(null, 204);
});


