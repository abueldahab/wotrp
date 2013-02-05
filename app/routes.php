<?php
/** Normal User Pages **/

// Static Pages
Route::get('/', function()
{
	echo TheFourthAge::today();
	return View::make('static/index');
});

Route::get('resources', function ()
{
	return View::make('static/resources');
});

// News Pages
Route::get('news', function ()
{
	return View::make('news/index');
});

Route::get('news/{slug}', function ($slug) {
	return View::make('news/post');
});

// User Pages no logged in
Route::post('login', 'AuthController@login');
Route::get('register', 'AuthController@register');
Route::post('register', 'AuthController@create');
Route::get('lost-password', 'AuthController@lostPassword');
Route::post('reset-password', 'AuthController@resetPassword');

// User Pages logged in
Route::group(array('before' => 'auth'), function()
{
	Route::get('profile/{username?}', 'AuthController@profile');
	Route::get('logout', 'AuthController@logout');
	Route::get('profile/{username?}/edit', 'AuthController@editProfile');
	Route::post('profile', 'AuthController@updateProfile');
});

// Character Pages not logged in
Route::get('characters', 'CharacterController@index');
Route::get('character/{slug}', 'CharacterController@view');

// Character Pages logged in
Route::group(array('before' => 'auth'), function()
{
	Route::get('my-characters', 'CharacterController@myCharacters');
	Route::get('character/create', 'CharacterController@create');
	Route::post('character/create', 'CharacterController@store');
	Route::get('character/{slug}/edit', 'CharacterController@edit');
	Route::post('character/edit', 'CharacterController@update');
});

// Forums not logged in
Route::get('forums', 'ForumController@index');
Route::get('forum/{name}', 'ForumController@view');
Route::get('forum/{name}/{thread}', 'ForumController@viewThread');

// Forums logged in
Route::group(array('before' => 'auth'), function()
{
	Route::get('thread/create', 'ForumController@createThread');
	Route::post('thread/create', 'ForumController@storeThread');
	Route::get('reply/{slug}', 'ForumController@reply');
	Route::post('reply', 'ForumController@postReply');
	Route::post('close/{slug}', 'ForumController@close');  // Can only be done by the person who started the Thread or a Moderator rewards XP
	Route::get('post/{id}/edit', 'ForumController@editPost'); // Can only edit your own posts
	Route::post('post/edit', 'ForumController@updatePost');
	Route::get('forums/mark-read', 'ForumController@markAllForumsRead'); // Mark All Forums Read
	Route::get('forums/{id}/mark-read', 'ForumController@markForumRead'); // Mark a Forum Read
});

/** Moderator Pages **/
Route::group(array('before' => 'auth|moderator'), function()
{
	Route::get('post/{id}/delete', 'ForumController@deletePost');
	Route::get('thread{id}/delete', 'ForumController@deleteThread');
	Route::get('thread/{id}/lock', 'FourmController@lockThread'); // Locking a Thread does not reward XP
	Route::get('feature/{id}', 'Forums@featureThread'); // Shows up on Home Page
});

/** Admin Pages **/
Route::group(array('before' => 'auth|admin'), function()
{
	// User Pages
	Route::get('admin', 'AdminController@index');
	Route::get('admin/users', 'AdminController@users');
	Route::get('admin/user/{id}', 'AdminController@viewUser');
	Route::post('admin/user','AdminController@editUser');
	Route::delete('admin/user/{id}', 'AdminController@deleteUser');

	// Character Pages
	Route::get('admin/characters', 'AdminController@chracters');
	Route::get('admin/character/{id}', 'AdminController@viewCharacter');
	Route::post('admin/character', 'AdminController@editCharacter');
	Route::get('admin/character/{id}/delete', 'AdminController@deleteCharacter');

	// Other Pages
	Route::get('admin/stats', 'AdminController@stats');

	// News Pages
	Route::get('admin/news', 'AdminController@news');
	Route::post('admin/news/create', 'AdminController@createNews');
	Route::get('admin/news/{id}', 'AdminController@viewNews');
	Route::post('admin/news/edit', 'AdminController@editNews');
	Route::get('admin/news/{id}/delete', 'AdminController@deleteNews');
});