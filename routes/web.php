<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\RunnersController;
use App\Http\Controllers\DropzoneController;

Route::get("/",IndexController::class)->name("index.index");


Route::get("/admin",AdminController::class)->name("admin");
Route::post('/admin/validate',[AdminController::class,'validateAdminCredentials'])->name('admin.validate');
Route::get("/admin/index",[AdminController::class, 'index'])->name("admin.index");

Route::get("/admin/courses",CoursesController::class)->name("courses");
Route::get("/admin/courses/create",[CoursesController::class,'create'])->name("courses.create");
Route::post("/admin/courses",[CoursesController::class, 'store'])->name("courses.store");
Route::get("/admin/courses/edit/{id}",[CoursesController::class,'edit'])->name("courses.edit");
Route::put("/admin/courses/update/{id}",[CoursesController::class, 'update'])->name("courses.update");
Route::get("/admin/courses/delete/{id}/{active}",[CoursesController::class, 'delete'])->name("courses.delete");

Route::get('dropzone/{id}', [DropzoneController::class, 'dropzone'])->name('dropzone');
Route::post('dropzone/store/{id}', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');

Route::get("/admin/aseguradoras",[AdminController::class,'indexAseguradoras'])->name("admin.aseguradoras.index");
Route::post("/admin/aseguradoras",[AdminController::class, 'storeAseguradoras'])->name("admin.aseguradoras.store");

Route::get("/admin/sponsors",SponsorsController::class)->name("sponsors");
Route::get("/admin/sponsors/create",[SponsorsController::class,'create'])->name("sponsors.create");
Route::post("/admin/sponsors",[SponsorsController::class, 'store'])->name("sponsors.store");
Route::get("/admin/sponsors/edit/{id}",[SponsorsController::class,'edit'])->name("sponsors.edit");
Route::put("/admin/sponsors/update/{id}",[SponsorsController::class, 'update'])->name("sponsors.update");
Route::get("/admin/sponsors/delete/{id}/{active}",[SponsorsController::class, 'delete'])->name("sponsors.delete");

Route::get("/admin/runners",RunnersController::class)->name("runners");
Route::get("/admin/runners/create",[RunnersController::class,'create'])->name("runners.create");
Route::post("/admin/runners",[RunnersController::class, 'store'])->name("runners.store");
Route::get("/admin/runners/edit/{id}",[RunnersController::class,'edit'])->name("runners.edit");
Route::post("/admin/runners/search",[RunnersController::class,'search'])->name("runners.search");
Route::put("/admin/runners/update/{id}",[RunnersController::class, 'update'])->name("runners.update");
Route::get("/admin/runners/delete/{id}/{active}",[RunnersController::class, 'delete'])->name("runners.delete");


Route::get("/courses/available",[CoursesController::class, 'showAvailable'])->name("courses.available");
Route::get("/courses/finished/",[CoursesController::class, 'showFinished'])->name("courses.finished");
Route::get("/courses/finished/pictures/{id}",[CoursesController::class, 'showPictures'])->name("courses.pictures");
Route::post("/courses/register/{id}",[CoursesController::class, 'register'])->name("courses.register");
Route::get("/courses/register/{idCourse}",[CoursesController::class, 'registerForm'])->name("courses.registerForm");
Route::post("/courses/registerWithID/{id}",[CoursesController::class, 'registerWithID'])->name("courses.registerWithID");
Route::get("/courses/registerWithID/{idCourse}",[CoursesController::class, 'registerWithIDForm'])->name("courses.registerWithIDForm");

Route::get("/qrcode",[CoursesController::class, 'qr_qenerate'])->name("courses.qrcode");

Route::get("/runners/rankingMain",[RunnersController::class, 'rankingMain'])->name("rankingMain");
Route::post("/runners/lookInto",[RunnersController::class,'lookInto'])->name("runners.lookInto");
Route::get("/runners/ranking20",[RunnersController::class,'ranking20'])->name("ranking20");
Route::get("/runners/ranking30",[RunnersController::class, 'ranking30'])->name("ranking30");
Route::get("/runners/ranking40",[RunnersController::class, 'ranking40'])->name("ranking40");
Route::get("/runners/ranking50",[RunnersController::class, 'ranking50'])->name("ranking50");
Route::get("/runners/ranking60",[RunnersController::class, 'ranking60'])->name("ranking60");

