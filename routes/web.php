<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;

Route::get("/",IndexController::class)->name("index.index");


Route::get("/admin",AdminController::class)->name("admin");


Route::get("/admin/courses",[AdminController::class,'indexCourses'])->name("admin.courses.index");
Route::post("/admin/courses",[AdminController::class, 'storeCourses'])->name("admin.courses.store");

Route::get("/admin/aseguradoras",[AdminController::class,'indexAseguradoras'])->name("admin.aseguradoras.index");
Route::post("/admin/aseguradoras",[AdminController::class, 'storeAseguradoras'])->name("admin.aseguradoras.store");

Route::get("/admin/sponsors",[AdminController::class,'indexSponsors'])->name("admin.sponsors.index");
Route::post("/admin/sponsors",[AdminController::class, 'storeSponsors'])->name("admin.sponsors.store");