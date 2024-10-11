<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    RecipeController,
    LiquidController,
    PumpController,
    ContainerController,
    IngredientController,
    GlassController
};


Route::resource('recipe', RecipeController::class);
Route::resource('liquid', LiquidController::class);
Route::resource('pump', PumpController::class);
Route::resource('container', ContainerController::class);
Route::resource('ingredient', IngredientController::class);
Route::resource('glass', GlassController::class);



Route::get('/', function () {
    redirect()->route('recipe.index');

})->name('index');
