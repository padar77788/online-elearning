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

// Route::get('/', 'HomeController@index');

Auth::routes(['verify' => true]);





Route::group(['prefix'=>'admin','namespace'=>'admin','middleware'=>['auth','admin']],function(){

          Route::get('dashboard','DashboardController@index')->name('dashboard');
          Route::get('catagory','CatagoryController@index')->name('manage-catagory');
          Route::get('catagory/create','CatagoryController@create')->name('create-catagory');
          Route::post('catagory/store','CatagoryController@store')->name('store-catagory');
          Route::get('catagory/show/{id}','CatagoryController@show')->name('show-catagory');
          Route::get('catagory/edit/{id}','CatagoryController@edit')->name('edit-catagory');
          Route::post('catagory/update','CatagoryController@update')->name('update-catagory');
          Route::get('catagory/destroy/{id}','CatagoryController@destroy')->name('destroy-catagory');


          Route::get('course','CourseController@index')->name('manage-course');
          Route::get('course/create','CourseController@create')->name('create-course');
          Route::post('course/store','CourseController@store')->name('store-course');
          Route::get('course/show/{id}','CourseController@show')->name('show-course');
          Route::get('course/edit/{id}','CourseController@edit')->name('edit-course');
          Route::post('course/update','CourseController@update')->name('update-course');
          Route::get('course/destroy/{id}','CourseController@destroy')->name('destroy-course');


          Route::get('section','SectionController@index')->name('manage-section');
          Route::get('section/create','SectionController@create')->name('create-section');
          Route::post('section/store','SectionController@store')->name('store-section');
          Route::get('section/show/{id}','SectionController@show')->name('show-section');
          Route::get('section/edit/{id}','SectionController@edit')->name('edit-section');
          Route::post('section/update','SectionController@update')->name('update-section');
          Route::get('section/destroy/{id}','SectionController@destroy')->name('destroy-section');

          Route::get('lession','LessionController@index')->name('manage-lession');
          Route::get('lession/create','LessionController@create')->name('create-lession');
          Route::post('lession/store','LessionController@store')->name('store-lession');
          Route::get('lession/show/{id}','LessionController@show')->name('show-lession');
          Route::get('lession/edit/{id}','LessionController@edit')->name('edit-lession');
          Route::post('lession/update','LessionController@update')->name('update-lession');
          Route::get('lession/destroy/{id}','LessionController@destroy')->name('destroy-lession');

          Route::get('user','UserprofileController@index')->name('manage-users');
          Route::get('user/approved/{id}','UserprofileController@userapproved')->name('user-approved');
          Route::get('user/unapproved/{id}','UserprofileController@userunapproved')->name('user-unapproved');
          Route::get('user/destroy/{id}','UserprofileController@userdestroy')->name('user-destroy');
          Route::get('logout','HomeController@logout')->name('admin-logout');

});


//instructor route start here
Route::group(['prefix'=>'instructor','namespace'=>'Instructor','middleware'=>['auth','instructor']],function(){

          Route::get('dashboard','DashboardController@index')->name('dashboard');
          Route::get('course','CourseController@index')->name('instructor-manage-course');
          Route::get('course/create','CourseController@create')->name('instructor-create-course');
          Route::post('course/store','CourseController@store')->name('instructor-store-course');
          Route::get('course/show/{id}','CourseController@show')->name('instructor-show-course');
          Route::get('course/edit/{id}','CourseController@edit')->name('instructor-edit-course');
          Route::post('course/update','CourseController@update')->name('instructor-update-course');
          Route::get('course/destroy/{id}','CourseController@destroy')->name('instructor-destroy-course');
          Route::get('section','SectionController@index')->name('instructor-manage-section');
          Route::get('section/create','SectionController@create')->name('instructor-create-section');
          Route::post('section/store','SectionController@store')->name('instructor-store-section');
          Route::get('section/show/{id}','SectionController@show')->name('instructor-show-section');
          Route::get('section/edit/{id}','SectionController@edit')->name('instructor-edit-section');
          Route::post('section/update','SectionController@update')->name('instructor-update-section');
          Route::get('section/destroy/{id}','SectionController@destroy')->name('instructor-destroy-section');
          Route::get('lession','LessionController@index')->name('instructor-manage-lession');
          Route::get('lession/create','LessionController@create')->name('instructor-create-lession');
          Route::post('lession/store','LessionController@store')->name('instructor-store-lession');
          Route::get('lession/show/{id}','LessionController@show')->name('instructor-show-lession');
          Route::get('lession/edit/{id}','LessionController@edit')->name('instructor-edit-lession');
          Route::post('lession/update','LessionController@update')->name('instructor-update-lession');
          Route::get('lession/destroy/{id}','LessionController@destroy')->name('instructor-destroy-lession');
          Route::get('logout','HomeController@logout')->name('admin-logout');

});







//frontend route start here

 Route::get('/','website\HomeController@index')->name('home');

 Route::group(['prefix'=>'website','namespace'=>'website'],function(){

          Route::get('about','AboutController@index')->name('about');
          Route::get('category/{id}','CatagoryController@index')->name('catagory');
          Route::get('contact','ContactController@index')->name('contact');
          Route::post('contact/store','ContactController@store')->name('contact-store');
          Route::get('courses/{id}','CourseController@singelcourse')->name('courses');

          Route::get('single-course','SinglecourseController@index')->name('single-course');
          Route::get('lession','LessionController@index')->name('single-lession');
          Route::get('lession/{id}','LessionController@lession')->name('lession');

          Route::get('profile','ProfileController@index')->name('profile');
          Route::post('comments/store','ComentsController@commentstore')->name('comments');
          Route::post('reply/store','ReplyController@replystore')->name('reply');
          Route::get('like/{id}','LikeController@like')->name('like');
          Route::get('dislike/{id}','LikeController@dislike')->name('dislike');
          Route::post('subscribe','SubscribeController@store')->name('subscribe-store');


});

//user route start here
Route::group(['prefix'=>'website','namespace'=>'User','middleware'=>'auth'],function(){

           Route::get('profile','ProfileController@index')->name('profile');
           Route::get('profile/edit','ProfileController@edit')->name('edit-profile');
           Route::post('profile/update','ProfileController@update')->name('update-profile');
           Route::get('password/create','PasswordController@create')->name('password');
           Route::post('password/update','PasswordController@update')->name('update-password');



});
