<?php

Route::get('/',function (){
    return view('/menu');
});

Route::group(['prefix'=>'fornecedores'],function (){
    Route::get("/new","PessoasController@new");
    Route::get("/list","PessoasController@list");
    Route::post("/store","PessoasController@store");
});