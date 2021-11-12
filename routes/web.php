<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about');
Route::get('contact-us', [PagesController::class, 'contactUs'])->name('contact');
Route::get('opportunities', [PagesController::class, 'opportunity'])->name('opportunity');

// The Projects
Route::get('research-activities', [pagesController::class, 'researchActivities'])->name('research');
Route::get('capacity-building', [pagesController::class, 'capacityBuilding'])->name('capacityBuilding');
Route::get('curriculum-development', [pagesController::class, 'curriculumDev'])->name('curriculum');
Route::get('acado_prenuership', [PagesController::class, 'acadoPre'])->name('acado');
Route::get('acado_prenuership/start-up', [PagesController::class, 'startUpLoop'])->name('acado_start');


// Events
Route::get('events/fyp-exhibition', [EventsController::class, 'fypExhibition'])->name('exhibition');

/* Symposium */
Route::get('events/symposium', [EventsController::class, 'symposium'])->name('symposium');
Route::get('events/symposium/day1', [EventsController::class, 'symposiumDay1'])->name('symposium-day1');
Route::get('events/symposium/day2', [EventsController::class, 'symposiumDay2'])->name('symposium-day2');
Route::get('events/symposium/day3', [EventsController::class, 'symposiumDay3'])->name('symposium-day3');
Route::get('events/symposium/posters', [EventsController::class, 'symposiumPosters'])->name('symposium-posters');

/* Webminars */
Route::get('events/webinar/first-edition', [EventsController::class, 'webinarFirst'])->name('webinar-1st');
Route::get('events/webinar/second-edition', [EventsController::class, 'webinarSecond'])->name('webinar-2nd');

/* Workshops */
// Second Edition
Route::get('events/workshops/second-edition', [EventsController::class, 'workshop2nd'])->name('workshop2nd');
Route::get('events/workshops/second-edition/Day1', [EventsController::class, 'workshop2ndDay1'])->name('workshop2ndDay1');
Route::get('events/workshops/second-edition/Day2', [EventsController::class, 'workshop2ndDay2'])->name('workshop2ndDay2');
Route::get('events/workshops/second-edition/Day3', [EventsController::class, 'workshop2ndDay3'])->name('workshop2ndDay3');

//  Third Edition
Route::get('events/workshops/third-edition', [EventsController::class, 'workshop3rd'])->name('workshop3rd');
Route::get('events/workshops/third-edition/Day1', [EventsController::class, 'workshop3rdDay1'])->name('workshop3rdDay1');
Route::get('events/workshops/third-edition/Day2', [EventsController::class, 'workshop3rdDay2'])->name('workshop3rdDay2');
Route::get('events/workshops/third-edition/Day3', [EventsController::class, 'workshop3rdDay3'])->name('workshop3rdDay3');


// Events Ends 


// Online Projects
Route::get('learnergy_lms', [PagesController::class, 'lmsPage'])->name('learNergy');


// Achievements
Route::get('achievements/product-pitching', [PagesController::class, 'prodPitching'])->name('pitching');
Route::get('achievements/industrial-immersion', [PagesController::class, 'studentImmersion'])->name('IIP4S');
Route::get('achievements/industrial-immersion/gallery', [PagesController::class, 'immersionGallery'])->name('IIP4S-gallery');
Route::get('achievements/academic-immersion', [PagesController::class, 'academicImmersion'])->name('academic');
