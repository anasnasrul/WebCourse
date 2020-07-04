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

//Dashboard
Route::get('/', 'HomeController@index' );

//Course Youtube
Route::get('/course/youtube', 'YoutubeController@index' );

	//Course Youtube PHP
	Route::get('/course/youtube/php', 'PHPController@index' );

	//Course Youtube JavaScript
	Route::get('/course/youtube/javascript', 'JavaScriptController@index' );

	//Course Youtube HTML
	Route::get('/course/youtube/html', 'HTMLController@index' );

	//Course Youtube CSS
	Route::get('/course/youtube/css', 'CSSController@index' );

	//Course Youtube java
	Route::get('/course/youtube/java', 'JavaController@index' );

	//Course Youtube java
	Route::get('/course/youtube/jquery', 'jQueryController@index' );

//Course Udemy
Route::get('/course/udemy', 'UdemyController@index' );

	//Course Udemy AWS Cloud
	Route::get('/course/udemy/awscloud', 'AWSCloudController@index' );

	Route::get('/course/udemy/awscloud2', 'AWSCloudController@index2' );

	//Course Udemy Python
	Route::get('/course/udemy/python', 'PythonUdemyController@index' );

	//Course Udemy Python
	Route::get('/course/udemy/java', 'JavaUdemyController@index' );

//Course Sololearn
Route::get('/course/sololearn', 'SololearnController@index' );
	//Course Sololearn HTML
	Route::get('/course/sololearn/html', 'HTMLSoloController@index' );

		//Course Sololearn HTML2
		Route::get('/course/sololearn/html2', 'HTMLSoloController@index2' );

		//Course Sololearn HTML3
		Route::get('/course/sololearn/html3', 'HTMLSoloController@index3' );

	//Course Sololearn JavaScript
	Route::get('/course/sololearn/javascript', 'JavaScriptSoloController@index' );	

		//Course Sololearn JavaScript2
		Route::get('/course/sololearn/javascript2', 'JavaScriptSoloController@index2' );	

		//Course Sololearn JavaScript3
		Route::get('/course/sololearn/javascript3', 'JavaScriptSoloController@index3' );

		//Course Sololearn JavaScript4
		Route::get('/course/sololearn/javascript4', 'JavaScriptSoloController@index4' );

		//Course Sololearn JavaScript5
		Route::get('/course/sololearn/javascript5', 'JavaScriptSoloController@index5' );

		//Course Sololearn JavaScript6
		Route::get('/course/sololearn/javascript6', 'JavaScriptSoloController@index6' );

		//Course Sololearn JavaScript7
		Route::get('/course/sololearn/javascript7', 'JavaScriptSoloController@index7' );

		//Course Sololearn JavaScript8
		Route::get('/course/sololearn/javascript8', 'JavaScriptSoloController@index8' );

	//Course Sololearn jQuery
	Route::get('/course/sololearn/jquery', 'jQuerySoloController@index' );

		//Course Sololearn jQuery2
		Route::get('/course/sololearn/jquery2', 'jQuerySoloController@index2' );

		//Course Sololearn jQuery3
		Route::get('/course/sololearn/jquery3', 'jQuerySoloController@index3' );

		//Course Sololearn jQuery4
		Route::get('/course/sololearn/jquery4', 'jQuerySoloController@index4' );

		//Course Sololearn jQuery5
		Route::get('/course/sololearn/jquery5', 'jQuerySoloController@index5' );

		//Course Sololearn jQuery6
		Route::get('/course/sololearn/jquery6', 'jQuerySoloController@index6' );

	//Course Sololearn PHP
	Route::get('/course/sololearn/php', 'PHPSoloController@index' );

		//Course Sololearn PHP2
		Route::get('/course/sololearn/php2', 'PHPSoloController@index2' );

		//Course Sololearn PHP3
		Route::get('/course/sololearn/php3', 'PHPSoloController@index3' );

		//Course Sololearn PHP4
		Route::get('/course/sololearn/php4', 'PHPSoloController@index4' );

		//Course Sololearn PHP5
		Route::get('/course/sololearn/php5', 'PHPSoloController@index5' );

		//Course Sololearn PHP6
		Route::get('/course/sololearn/php6', 'PHPSoloController@index6' );

		//Course Sololearn PHP7
		Route::get('/course/sololearn/php7', 'PHPSoloController@index7' );

		//Course Sololearn PHP8
		Route::get('/course/sololearn/php8', 'PHPSoloController@index8' );

		//Course Sololearn PHP9
		Route::get('/course/sololearn/php9', 'PHPSoloController@index9' );		

	//Course Sololearn Python
	Route::get('/course/sololearn/python', 'PythonSoloController@index' );

		//Course Sololearn Python2
		Route::get('/course/sololearn/python2', 'PythonSoloController@index2' );

		//Course Sololearn Python3
		Route::get('/course/sololearn/python3', 'PythonSoloController@index3' );

		//Course Sololearn Python4
		Route::get('/course/sololearn/python4', 'PythonSoloController@index4' );

		//Course Sololearn Python5
		Route::get('/course/sololearn/python5', 'PythonSoloController@index5' );

		//Course Sololearn Python6
		Route::get('/course/sololearn/python6', 'PythonSoloController@index6' );

		//Course Sololearn Python7
		Route::get('/course/sololearn/python7', 'PythonSoloController@index7' );

		//Course Sololearn Python8
		Route::get('/course/sololearn/python8', 'PythonSoloController@index8' );

		//Course Sololearn Python9
		Route::get('/course/sololearn/python9', 'PythonSoloController@index9' );

	//Course Sololearn SQL
	Route::get('/course/sololearn/sql', 'SQLSoloController@index' );

		//Course Sololearn SQL2
		Route::get('/course/sololearn/sql2', 'SQLSoloController@index2' );

		//Course Sololearn SQL3
		Route::get('/course/sololearn/sql3', 'SQLSoloController@index3' );

//Profile
Route::get('/profile', 'ProfileController@index' );

//Portfolio
Route::get('/portfolio', 'PortfolioController@index' );

//Portfolio Register
Route::get('/portfolio/register', 'RegisterController@index' );
Route::post('/portfolio/register', 'RegisterController@store' );

//Portfolio Login
Route::get('/portfolio/login', 'LoginController@index' );
Route::post('/portfolio/login', 'LoginController@store' );

//Portfolio Login
Route::get('/portfolio/userprofile', 'UserProfileController@index' );

//Portfolio Chat
Route::get('/portfolio/chat', 'ChatController@index' );
Route::post('/portfolio/send', 'ChatController@send' );

//Portfolio Course
Route::get('/portfolio/course', 'CourseController@index' );

//Portfolio Guestbook
Route::get('/portfolio/guestbook', 'GuestbookController@index');

Route::resource('/portfolio/guestbook', 'GuestbookController');
Route::get('/portfolio/guestbook/{id}/delete', ['as' => 'guestbook.delete', 'uses' => 'GuestbookController@destroy']);




