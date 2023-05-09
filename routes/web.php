<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HomeController;
use  App\Http\Controllers\MenuList\MenulistController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\FuturProjectController;
use App\Http\Controllers\CurrentProjectController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FileController;
use  App\Http\Controllers\CirtificationController;

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/runningProject-home/{id}',[HomeController::class,'runningProject'])->name('runningProject');
Route::get('/futureProject-home/{id}',[HomeController::class,'futureProject'])->name('futureProject');

Route::get('/activity-education',[HomeController::class,'activity'])->name('ActivityEducation');
Route::get('/activity-health',[HomeController::class,'health'])->name('ActivityHealth');
Route::get('/activity-ict',[HomeController::class,'ict'])->name('ActivityIct');


Route::get('/Major-Objectives',[HomeController::class,'MajorObjectives'])->name('MajorObjectives');
Route::get('/Working-Aria',[HomeController::class,'WorkingAria'])->name('WorkingAria');
Route::get('/Working-Beneficiaries',[HomeController::class,'Beneficiaries'])->name('Beneficiaries');
Route::get('/Working-Monitoring',[HomeController::class,'Monitoring'])->name('Monitoring');



//menu


Route::get('/About-Us',[MenulistController::class,'AboutUs'])->name('AboutUs');
Route::get('/Our-manage',[MenulistController::class,'OurManage'])->name('OurManage');
Route::get('/Our-Organ',[MenulistController::class,'OurOrgan'])->name('OurOrgan');



//training Program


Route::get('/Occopetion-train',[MenulistController::class,'Occopetion'])->name('Occopetion');
Route::get('/Training-train',[MenulistController::class,'Training'])->name('Training');
Route::get('/Assessment-train',[MenulistController::class,'Assessment'])->name('Assessment');
Route::get('/Certification-train',[MenulistController::class,'Certification'])->name('Certification');

//Train sub
Route::get('/Employment-train',[MenulistController::class,'Employment'])->name('Employment');
Route::get('/History-train',[MenulistController::class,'History'])->name('History');
Route::get('/Tracking-train',[MenulistController::class,'Tracking'])->name('Tracking');


Route::get('/summary-train',[MenulistController::class,'summary'])->name('summary');

//MenuActivi

Route::get('/formal-Activi',[MenulistController::class,'formal'])->name('formal');
Route::get('/Education-Activi',[MenulistController::class,'Education'])->name('Education');
Route::get('/Special-Activi',[MenulistController::class,'Special'])->name('Special');
Route::get('/Covid-Activi',[MenulistController::class,'Covid'])->name('Covid');
Route::get('/Health-Activi',[MenulistController::class,'Health'])->name('Health');
Route::get('/Mch-Activi',[MenulistController::class,'Mch'])->name('Mch');
Route::get('/Prevention-Activi',[MenulistController::class,'Prevention'])->name('Prevention');
Route::get('/Trafficking-Activi',[MenulistController::class,'Trafficking'])->name('Trafficking');



//OurPrograms

Route::get('/Adolescent-Programs',[MenulistController::class,'Adolescent'])->name('Adolescent');
Route::get('/Development-Programs',[MenulistController::class,'Development'])->name('Development');
Route::get('/Program-Programs',[MenulistController::class,'Program'])->name('Program');
Route::get('/Disables-Programs',[MenulistController::class,'Disables'])->name('Disables');
Route::get('/Gallery-Programs',[MenulistController::class,'Gallery'])->name('Gallery');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

  Route::resource('members',MemberController::class);

  Route::resource('FutureProjects',FuturProjectController::class);
  Route::resource('CurrentProjects',CurrentProjectController::class);
  Route::resource('gallerys',\App\Http\Controllers\GalleryController::class);
 Route::resource('Files',\App\Http\Controllers\FileController::class);
 Route::resource('cirtifications', \App\Http\Controllers\CirtificationController::class);
 Route::resource('assesments',\App\Http\Controllers\AssesmentController::class);
});
