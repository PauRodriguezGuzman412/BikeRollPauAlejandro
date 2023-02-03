<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;

Route::get("/",IndexController::class)->name("index.index");


Route::get("/admin",AdminController::class)->name("admin");


Route::get("/courses",CoursesController::class)->name("courses");
Route::get("/courses/create",[CoursesController::class,'create'])->name("courses.create");
Route::post("/courses",[CoursesController::class, 'store'])->name("courses.store");
Route::get("/courses/edit",[CoursesController::class,'edit'])->name("courses.edit");
Route::put("/courses",[CoursesController::class, 'update'])->name("courses.update");
Route::delete("/courses",[CoursesController::class, 'deletes'])->name("courses.delete");

Route::get("/admin/aseguradoras",[AdminController::class,'indexAseguradoras'])->name("admin.aseguradoras.index");
Route::post("/admin/aseguradoras",[AdminController::class, 'storeAseguradoras'])->name("admin.aseguradoras.store");

Route::get("/admin/sponsors",[AdminController::class,'indexSponsors'])->name("admin.sponsors.index");
Route::post("/admin/sponsors",[AdminController::class, 'storeSponsors'])->name("admin.sponsors.store");