<?php

//HomePage
Route::get('/', 'HomePageController@index' );

//Show Spesific post
Route::get('/posts/{id}/{post}', 'PostPageController@show')->name('post.show');

//PostPage
// Route::get('/post', 'PostPageController@index');


Route::group(['prefix'=>'back'], function(){
        Route::get('/', 'DashboardController@index');
        Route::get('/post-list', 'PostPageController@index')->name('post');
        Route::get('/comment-list', 'CommentController@index')->name('comment');
        Route::get('/user-list', 'UserController@index')->name('user');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
