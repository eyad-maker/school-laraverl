<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::group( ['middleware' => [ 'guest' ] ], function(){ 
                Route::get('/', function()
                                    {
                                        return view('auth.login');
                                    });

    });

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
    ], function()
              { 

                        // =======================route for grades========================
                        Route::group(['namespace'=>"Grades" ], function()
                        { 
                            Route::resource('Grades', 'GradeController');
            
                        });
            
                       
                          // ==============================route for authenitcation===========================
                        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
                        // =======================route for Classrooms========================
                        Route::group(['namespace'=>"Classroom" ], function()
                        { 
                            Route::resource('Classrooms', 'ClassroomController');
                            Route::post('delete_all', 'ClassroomController@delete_all')->name('delete_all');
                            Route::post('Filter_Classes', 'ClassroomController@Filter_Classes')->name('Filter_Classes');
            
                        });
                          // =======================route for Sections========================
                        Route::group(['namespace'=>"Sections" ], function(){
                            Route::resource('section', 'SectionController');
                            Route::get('/classes/{id}', 'SectionController@getclasses');

                        });
                         //==============================parents============================

                        Route::view('add_parent','livewire.show_Form');
                         //==============================Teachers============================
                        Route::group(['namespace' => 'Teacher'], function ()
                        {
                            Route::resource('Teachers', 'TeacherController');
                        });
                         //==============================Students============================
                         Route::group(['namespace' => 'Students'], function ()
                         {
                            Route::resource('Students', 'StudentController');
                            Route::get('/Get_classrooms/{id}', 'StudentController@Get_classrooms');
                            Route::get('/Get_Sections/{id}', 'StudentController@Get_Sections');
                         });
                       


    });






