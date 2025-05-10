<?php
use Illuminate\Support\Facades\Route;
use Pm\ContentManager\Http\Controllers\ContentController;


Route::get('/blog', [\Pm\ContentManager\Http\Controllers\ContentController::class, 'index']);
Route::get('/pages', [\Pm\ContentManager\Http\Controllers\ContentController::class, 'index']);


Route::get('/pagina/{slug}', fn ($slug) =>
    app(ContentController::class)->show('page', $slug)
);

Route::get('/blog/{slug}', fn ($slug) =>
    app(ContentController::class)->show('blog', $slug)
);
