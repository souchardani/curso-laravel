<?php

use Illuminate\Support\Facades\Route;

Route::view("/", "index")-> name("index");
Route::view("/about", "about")->name("about");





?>
