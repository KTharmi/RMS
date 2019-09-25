<?php

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

Route::group(['namespace' =>'User'],function(){
    Route::get('/', 'HomeController@index');
    Route::get('/rms', 'HomeController@index')->name('rms');
    Route::get('post','PostController@index')->name('post');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/contact','ContactController@store')->name('contact.store');
    Route::get('/sample', 'HomeController@index')->name('sample');
});

Auth::routes();
Route::group(['middleware' => ['auth']],function(){

    Route::group(['middleware' =>['admin']],function(){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::group(['namespace' =>'Admin', 'prefix' => 'departments'],function(){
        Route::get('/', 'DepartmentController@index')->name('departments.index');
        Route::get('/create', 'DepartmentController@create')->name('departments.create');
        Route::post('/', 'DepartmentController@store')->name('departments.store');
        Route::get('/profile','ProfileController@index')->name('admin.profile');
        Route::get('/calander','CalanderController@index')->name('admin.calander');

        Route::get('/{department}/edit', 'DepartmentController@edit')->name('departments.edit');
        Route::patch('/update/{department}', 'DepartmentController@update')->name('departments.update');

        Route::get('/delete/{department}', 'DepartmentController@delete')->name('departments.delete');
        Route::delete('destroy/{department}', 'DepartmentController@destroy')->name('departments.destroy');
        });

        Route::group([ 'namespace' =>'Admin','prefix' => 'lecturers'],function(){
        Route::get('/', 'LecturerController@index')->name('lecturers.index');
        Route::get('/create', 'LecturerController@create')->name('lecturers.create');
        Route::post('/', 'LecturerController@store')->name('lecturers.store');

        Route::get('/{lecturer}/edit', 'LecturerController@edit')->name('lecturers.edit');
        Route::patch('/update/{lecturer}', 'LecturerController@update')->name('lecturers.update');

        Route::get('/delete/{lecturer}', 'LecturerController@delete')->name('lecturers.delete');
        Route::delete('destroy/{lecturer}', 'LecturerController@destroy')->name('lecturers.destroy');
        });

        Route::group([ 'namespace' =>'Admin','prefix' => 'students'],function(){
        Route::get('/', 'StudentController@index')->name('students.index');
        Route::get('/create', 'StudentController@create')->name('students.create');
        Route::post('/', 'StudentController@store')->name('students.store');

        Route::get('/{student}/edit', 'StudentController@edit')->name('students.edit');
        Route::patch('/update/{student}', 'StudentController@update')->name('students.update');

        Route::get('/delete/{student}', 'StudentController@delete')->name('students.delete');
        Route::delete('destroy/{student}', 'StudentController@destroy')->name('students.destroy');
        });

        Route::group([ 'namespace' =>'Admin','prefix' => 'users'],function(){
        Route::get('/', 'UserController@index')->name('users.index');
        Route::get('/create', 'UserController@create')->name('users.create');
        Route::post('/', 'UserController@store')->name('users.store');

        Route::get('/{user}/edit', 'UserController@edit')->name('users.edit');
        Route::patch('/update/{user}', 'UserController@update')->name('users.update');

        Route::get('/delete/{user}', 'UserController@delete')->name('users.delete');
        Route::delete('destroy/{user}', 'UserController@destroy')->name('users.destroy');
        });
        Route::group([ 'namespace' =>'Admin','prefix' => 'request'],function(){
        Route::get('/', 'RequestController@index')->name('contact.index');
        Route::get('/{contact}/show', 'RequestController@show')->name('contact.show');
        Route::get('/delete/{contact}', 'RequestController@delete')->name('contact.delete');
        Route::delete('destroy/{contact}', 'RequestController@destroy')->name('contact.destroy');
        });

    });

    Route::group(['middleware' =>['hod']],function(){

        Route::get('/hod/home', 'HomeController@index')->name('hod');

        Route::group(['namespace' =>'Hod','prefix' => '/hod/syllabus'],function(){
            Route::get('/', 'SyllabusController@index')->name('syllabus.index');
            Route::get('/create', 'SyllabusController@create')->name('syllabus.create');
            Route::post('/', 'SyllabusController@store')->name('syllabus.store');

            Route::get('/profile','ProfileController@index')->name('hod.profile');
            Route::get('/calander','CalanderController@index')->name('hod.calander');

            Route::get('/{subject}/edit', 'SyllabusController@edit')->name('syllabus.edit');
            Route::patch('/update/{subject}', 'SyllabusController@update')->name('syllabus.update');

            Route::get('/delete/{subject}', 'SyllabusController@delete')->name('syllabus.delete');
            Route::delete('destroy/{subject}', 'SyllabusController@destroy')->name('syllabus.destroy');
           
            Route::group(['prefix' => 'final'],function(){
                Route::get('/', 'ResultController@index')->name('result.index');
            });

            Route::group(['prefix' => '/hod/lecturer'],function(){
                Route::get('/', 'LecturerController@index')->name('lecturer.index');
                Route::get('/{lecturer}/edit', 'LecturerController@edit')->name('lecturer.edit');
                Route::patch('/update/{lecturer}', 'LecturerController@update')->name('lecturer.update');
            });

            
            Route::group(['prefix' => '/hod/student'],function(){
                Route::get('/', 'StudentController@index')->name('student.index');
                Route::get('/{student}/edit', 'StudentController@edit')->name('student.edit');
                Route::patch('/update/{student}', 'StudentController@update')->name('student.update');
            });

        });

            
        

            // Route::group(['prefix' => 'result'],function(){
            //     Route::get('/', 'ResultController@index')->name('result.index');
            //     });
    });

    Route::group(['middleware' =>['lecturer']],function(){

    Route::group(['namespace' =>'Lecturer','prefix' => 'lecturer'],function(){
        Route::get('/home', 'HomeController@index')->name('lecturer');
        Route::get('/profile','ProfileController@index')->name('lecturer.profile');
        Route::get('/calander','CalanderController@index')->name('lecturer.calander');

        Route::group(['prefix' => 'ica/{level}'],function(){
            Route::get('/create/{subject?}', 'IcaController@create')->name('icas.create');
            Route::post('/store', 'IcaController@store')->name('icas.store');
            Route::get('/', 'IcaController@index')->name('icas.index');
        });

        Route::group(['prefix' => 'ece/{level}'],function(){
            Route::get('/create', 'EceController@create')->name('eces.create');
            Route::post('/store', 'EceController@store')->name('eces.store');
            Route::get('/', 'EceController@index')->name('eces.index');
        });

        
        Route::group(['prefix' => 'final/{level}'],function(){
        Route::get('/', 'FinalResultController@index')->name('final.index');
        });
    });

    

    });

    Route::group(['middleware' =>['student']],function(){

    Route::group(['namespace' =>'Student'],function(){
        Route::get('/student/home', 'HomeController@index')->name('student');


    });

    });
});
