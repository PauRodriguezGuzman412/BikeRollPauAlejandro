<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\SponsorsController;
use App\Http\Controllers\InsurancesController;
use App\Http\Controllers\RunnersController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\PayPalPaymentController;
use App\Http\Controllers\PDFController;

Route::get("/",IndexController::class)->name("index.index");

Route::get("/admin",AdminController::class)->name("admin");
Route::post('/admin/validate',[AdminController::class,'validateAdminCredentials'])->name('admin.validate');
Route::get("/admin/index",[AdminController::class, 'index'])->name("admin.index");
Route::get("/admin/logout",[AdminController::class,'logout'])->name("admin.logout");

Route::get("/admin/courses",CoursesController::class)->middleware(['auth','isAdmin'])->name("courses");
Route::get("/admin/courses/create",[CoursesController::class,'create'])->middleware(['auth','isAdmin'])->name("courses.create");
Route::post("/admin/courses",[CoursesController::class, 'store'])->middleware(['auth','isAdmin'])->name("courses.store");
Route::get("/admin/courses/edit/{id}",[CoursesController::class,'edit'])->middleware(['auth','isAdmin'])->name("courses.edit");
Route::put("/admin/courses/update/{id}",[CoursesController::class, 'update'])->middleware(['auth','isAdmin'])->name("courses.update");
Route::get("/admin/courses/delete/{id}/{active}",[CoursesController::class, 'delete'])->middleware(['auth','isAdmin'])->name("courses.delete");
Route::get("/admin/courses/runners/{id}",[CoursesController::class,'runners'])->middleware(['auth','isAdmin'])->name("coursesRunners");

Route::get('dropzone/{id}', [DropzoneController::class, 'dropzone'])->middleware(['auth','isAdmin'])->name('dropzone');
Route::post('dropzone/store/{id}', [DropzoneController::class, 'dropzoneStore'])->middleware(['auth','isAdmin'])->name('dropzone.store');

Route::get("/admin/aseguradoras",[AdminController::class,'indexAseguradoras'])->name("admin.aseguradoras.index");
Route::post("/admin/aseguradoras",[AdminController::class, 'storeAseguradoras'])->name("admin.aseguradoras.store");

Route::get("/admin/sponsors",SponsorsController::class)->middleware(['auth','isAdmin'])->name("sponsors");
Route::get("/admin/sponsors/create",[SponsorsController::class,'create'])->middleware(['auth','isAdmin'])->name("sponsors.create");
Route::post("/admin/sponsors",[SponsorsController::class, 'store'])->middleware(['auth','isAdmin'])->name("sponsors.store");
Route::get("/admin/sponsors/edit/{id}",[SponsorsController::class,'edit'])->middleware(['auth','isAdmin'])->name("sponsors.edit");
Route::put("/admin/sponsors/update/{id}",[SponsorsController::class, 'update'])->middleware(['auth','isAdmin'])->name("sponsors.update");
Route::get("/admin/sponsors/delete/{id}/{active}",[SponsorsController::class, 'delete'])->middleware(['auth','isAdmin'])->name("sponsors.delete");

Route::get("/admin/insurances",InsurancesController::class)->middleware(['auth','isAdmin'])->name("insurances");
Route::get("/admin/insurances/create",[InsurancesController::class,'create'])->middleware(['auth','isAdmin'])->name("insurances.create");
Route::post("/admin/insurances",[InsurancesController::class, 'store'])->middleware(['auth','isAdmin'])->name("insurances.store");
Route::get("/admin/insurances/edit/{id}",[InsurancesController::class,'edit'])->middleware(['auth','isAdmin'])->name("insurances.edit");
Route::put("/admin/insurances/update/{id}",[InsurancesController::class, 'update'])->middleware(['auth','isAdmin'])->name("insurances.update");
Route::get("/admin/insurances/delete/{id}/{active}",[InsurancesController::class, 'delete'])->middleware(['auth','isAdmin'])->name("insurances.delete");


Route::get("/admin/runners",RunnersController::class)->middleware(['auth','isAdmin'])->name("runners");
Route::get("/admin/runners/create",[RunnersController::class,'create'])->middleware(['auth','isAdmin'])->name("runners.create");
Route::post("/admin/runners",[RunnersController::class, 'store'])->middleware(['auth','isAdmin'])->name("runners.store");
Route::get("/admin/runners/edit/{id}",[RunnersController::class,'edit'])->middleware(['auth','isAdmin'])->name("runners.edit");
Route::post("/admin/runners/search",[RunnersController::class,'search'])->middleware(['auth','isAdmin'])->name("runners.search");
Route::put("/admin/runners/update/{id}",[RunnersController::class, 'update'])->middleware(['auth','isAdmin'])->name("runners.update");
Route::get("/admin/runners/delete/{id}/{active}",[RunnersController::class, 'delete'])->middleware(['auth','isAdmin'])->name("runners.delete");


Route::get("/courses/available",[CoursesController::class, 'showAvailable'])->name("courses.available");
Route::get("/courses/finished/",[CoursesController::class, 'showFinished'])->name("courses.finished");
Route::get("/courses/finished/pictures/{id}",[CoursesController::class, 'showPictures'])->name("courses.pictures");
Route::post("/courses/register/{id}",[CoursesController::class, 'register'])->name("courses.register");
Route::get("/courses/register/{idCourse}",[CoursesController::class, 'registerForm'])->name("courses.registerForm");
Route::post("/courses/registerWithID/{id}",[CoursesController::class, 'registerWithID'])->name("courses.registerWithID");
Route::post("/courses/checkIfRegistered",[CoursesController::class, 'registerWithID'])->name("courses.checkIfRegistered");
Route::get("/courses/registerWithID/{idCourse}/{userExists?}/{registerExists?}/{insuranceNeeded?}",[CoursesController::class, 'registerWithIDForm'])->name("courses.registerWithIDForm");

Route::get("/courses/qrcode/{idCourse}/{dniRunner}/{time?}",[CoursesController::class, 'qr'])->name("qrCode");

Route::get("/runners/rankingMain",[RunnersController::class, 'rankingMain'])->name("rankingMain");
Route::post("/runners/lookInto",[RunnersController::class,'lookInto'])->name("runners.lookInto");
Route::get("/runners/ranking20",[RunnersController::class,'ranking20'])->name("ranking20");
Route::get("/runners/ranking30",[RunnersController::class, 'ranking30'])->name("ranking30");
Route::get("/runners/ranking40",[RunnersController::class, 'ranking40'])->name("ranking40");
Route::get("/runners/ranking50",[RunnersController::class, 'ranking50'])->name("ranking50");
Route::get("/runners/ranking60",[RunnersController::class, 'ranking60'])->name("ranking60");

Route::post('handle-payment/{id}', [PayPalPaymentController::class,'handlePayment'])->name('make.payment');
Route::get('cancel-payment', [PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');
Route::get('payment-success/{id}/{dni}/{insurance_id?}', [PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');
Route::get('payment-summary/{course_id}/{dni}/{insurance_id?}', [PayPalPaymentController::class,'paymentSummary'])->name('payment.summary');

Route::get('payment-summary/generate-pdf/{course_id}/{runner_id}/{insurance_id}',[PDFController::class,'generatePDF'])->name('payment.generatePDF');
