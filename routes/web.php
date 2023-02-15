<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\RunnersController;

Route::get("/",IndexController::class)->name("index.index");


Route::get("/admin",AdminController::class)->name("admin");
Route::post('/admin/validate',[AdminController::class,'validateAdminCredentials'])->name('admin.validate');
Route::get("/admin/index",[AdminController::class, 'index'])->name("admin.index");

Route::get("/courses",CoursesController::class)->name("courses");
Route::get("/courses/create",[CoursesController::class,'create'])->name("courses.create");
Route::post("/courses",[CoursesController::class, 'store'])->name("courses.store");
Route::get("/courses/edit/{id}",[CoursesController::class,'edit'])->name("courses.edit");
Route::put("/courses/update/{id}",[CoursesController::class, 'update'])->name("courses.update");
Route::get("/courses/delete/{id}",[CoursesController::class, 'delete'])->name("courses.delete");

Route::get("/admin/aseguradoras",[AdminController::class,'indexAseguradoras'])->name("admin.aseguradoras.index");
Route::post("/admin/aseguradoras",[AdminController::class, 'storeAseguradoras'])->name("admin.aseguradoras.store");

Route::get("/sponsors",SponsorsController::class)->name("sponsors");
Route::get("/sponsors/create",[SponsorsController::class,'create'])->name("sponsors.create");
Route::post("/sponsors",[SponsorsController::class, 'store'])->name("sponsors.store");
Route::get("/sponsors/edit/{id}",[SponsorsController::class,'edit'])->name("sponsors.edit");
Route::put("/sponsors/update/{id}",[SponsorsController::class, 'update'])->name("sponsors.update");
Route::get("/sponsors/delete/{id}/{active}",[SponsorsController::class, 'delete'])->name("sponsors.delete");

Route::get("/runners",RunnersController::class)->name("runners");
Route::get("/runners/create",[RunnersController::class,'create'])->name("runners.create");
Route::post("/runners",[RunnersController::class, 'store'])->name("runners.store");
Route::get("/runners/edit/{id}",[RunnersController::class,'edit'])->name("runners.edit");
Route::put("/runners/update/{id}",[RunnersController::class, 'update'])->name("runners.update");
Route::get("/runners/delete/{id}/{active}",[RunnersController::class, 'delete'])->name("runners.delete");