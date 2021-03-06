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
//
//Route::get('/', function () {
//    return view('tasks');
//});

Route::get('/', "FrontEnd\HomeController@index");



Route::post('/register', 'Auth\RegisterController@register')->name('register');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('task/store', 'FrontEnd\TaskController@store')->name('task.store');
//Auth::routes();

Route::get('/mychallenges', 'FrontEnd\MyChallengesController@index')->name('mychallenges');
Route::get('/publicchallenges', 'FrontEnd\PublicChallengesController@index')->name('publicchallenges');
Route::get('/gologin', 'FrontEnd\HomeController@login')->name('go-login');
Route::get('/info', 'FrontEnd\HomeController@info')->name('info');


Route::get('/reward/list', 'FrontEnd\RewardController@list')->name('reward.list');
Route::post('/reward/store','FrontEnd\RewardController@store')->name('reward.store');
Route::post('/reward/delete','FrontEnd\RewardController@delete')->name('reward.delete');
Route::post('/reward/edit','FrontEnd\RewardController@edit')->name('reward.edit');





//////////////////////////////   Challenges   ////////////////////////////////////////////////////////////
Route::any('/mychallenges', 'FrontEnd\MyChallengesController@index')->name('mychallenges');

Route::post('/mychallenges/create', 'ChallengeController@assignChallenge')->name('mychallenges.create');

Route::post('/mychallenges/pending/list', 'ChallengeController@getPendingChallenges')->name('mychallenges.pending.list');
Route::post('/mychallenges/pending/create', 'ChallengeProgressController@acceptChallenges')->name('mychallenges.pending.create');

Route::post('/mychallenges/current/list', 'ChallengeProgressController@getCurrentChallenges')->name('mychallenges.current.list');
Route::post('/mychallenges/completed/list', 'ChallengeProgressController@getCompletedChallenges')->name('mychallenges.completed.list');

Route::any('/publicchallenges', 'FrontEnd\PublicChallengesController@index')->name('publicchallenges');

Route::post('/publicchallenges/list', 'ChallengeController@getPublicChallenges')->name('publicchallenges.list');
Route::post('/publicchallenges/pending/create', 'ChallengeProgressController@acceptChallenges')->name('publicchallenges.create');

Route::any('/createdchallenges', 'FrontEnd\CreatedChallengesController@index')->name('createdchallenges');
Route::get('/createdchallenges/unaccepted/list', 'ChallengeController@getUnacceptedChallenges')->name('createdchallenges.unaccepted.list');
Route::get('/createdchallenges/accepted/list', 'ChallengeProgressController@getAcceptedChallenges')->name('createdchallenges.accepted.list');

Route::get('/approvalrequest/list', 'ApprovalRequestController@getRequests')->name('approvalrequest.list');
Route::post('/approvalrequest/create', 'ApprovalRequestController@submitProgress')->name('approvalrequest.create');
Route::post('/approvalrequest/update', 'ApprovalRequestController@approveChallengeProgress')->name('approvalrequest.update');


Route::get('/home', 'FrontEnd\HomeController@index')->name('home')->middleware('auth');
Route::get('/signout', 'Auth\LoginController@signOut')->name('signout');

//////////////////////////////   Admin   ////////////////////////////////////////////////////////////
Route::get('/admin/approve/publicchallenges', 'Admin\ApprovePublicChallengesController@index')->name('admin.approve.publicchallenges');
Route::get('/admin/approve/publicchallenges/list', 'ChallengeController@getUnverifiedPublicChallenges')->name('admin.approve.publicchallenges.list');
Route::post('/admin/approve/publicchallenges/update', 'ChallengeController@VerifyPublicChallenge')->name('admin.approve.publicchallenges.list');

//////////////////////////////   Profile   ////////////////////////////////////////////////////////////
Route::post('profile/update/{user_id}','FrontEnd\ProfileController@update')->name('profile.update');
Route::get('/profile', 'FrontEnd\ProfileController@create')->name('profile');

Route::get('/user/myprofile','UserController@myprofile')->name("user/myprofile");
Route::post('/user/update','UserController@updateuser')->name("user/update");

Route::post('group/create', 'GroupController@create')->name('group.create');
Route::get('group/list',"GroupController@list")->name('group.list');
Route::get('group/form',"GroupController@form")->name('group.form');
Route::post('group/save',"GroupController@save")->name('group.save');
Route::post('group/edit/',"GroupController@edit")->name('group.edit');
Route::post('group/update',"GroupController@update")->name('group.update');
Route::get('group/removeMember/{group_id}/{user_id}',"GroupController@removeMember")->name('group.removeMember');
Route::get('group/addMember/{group_id}/{user_id}',"GroupController@addMember")->name('group.addMember');
Route::post('group/delete', 'GroupController@delete')->name('group.delete');
Route::post('group/leave', 'GroupController@leave')->name('group.leave');
//Route::get('group/delete/{award_id}',"AwardController@delete")->name('award/delete');



Route::get('task/list',"FrontEnd\TaskController@list")->name('task.list');
Route::get('task/form',"TaskController@form")->name('task/form');
Route::post('task/save',"TaskController@save")->name('task/save');
Route::post('task/delete', "FrontEnd\TaskController@delete")->name('task.delete');
Route::get('task/pick/{task_id}',"TaskController@pick")->name('task/pick');
Route::post('task/edit',"FrontEnd\TaskController@edit")->name('task.edit');
Route::post('task/update',"TaskController@update")->name('task.update');
Route::post('task/',"TaskController@doAssign")->name('task.doAssign');
Route::get('task/assign/{name}', "FrontEnd\TaskController@createAssign")->name('task.assign');
Route::post('task/assign', 'FrontEnd\TaskController@assignTask')->name('task.assignTask');

Route::get('award/list',"AwardController@list")->name('award/list');
Route::get('award/form',"AwardController@form")->name('award/form');
Route::post('award/save',"AwardController@save")->name('award/save');
Route::get('award/delete/{award_id}',"AwardController@delete")->name('award/delete');
Route::get('award/edit/{award_id}',"AwardController@edit")->name('award.edit');
Route::post('award/update',"AwardController@update")->name('award.update');






Route::post('util/upload',"UtilController@upload")->name('util.upload');






Route::get("test",function (){
   return view("frontend/home");
})->name('test');
