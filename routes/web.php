<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/sumar', function () {
    return view('formularios.sumar');
});
Route::get('/restar', function () {
    return view('formularios.restar');
});

Route::post('suma', function (HttpRequest $request) {
    $suma=$request->numero_uno+$request->numero_dos;
    $request->offsetSet('suma',$suma);
    return view('resultados.suma',['suma'=>$request->suma]);
});
Route::post('resta', function (HttpRequest $request) {
    $resta=$request->numero_uno-$request->numero_dos;
    $request->offsetSet('resta',$resta);
    return view('resultados.resta',['resta'=>$request->resta]);
});

Route::get('/dividir', function () {
    return view('formularios.dividir');
});
Route::get('/multiplicar', function () {
    return view('formularios.multiplicar');
});

Route::post('divide', function (HttpRequest $request) {
    $divide=$request->numero_uno/$request->numero_dos;
    $request->offsetSet('divide',$divide);
    return view('resultados.divide',['divide'=>$request->divide]);
});
Route::post('multiplica', function (HttpRequest $request) {
    $multiplica=$request->numero_uno*$request->numero_dos;
    $request->offsetSet('multiplica',$multiplica);
    return view('resultados.multiplica',['multiplica'=>$request->multiplica]);
});
