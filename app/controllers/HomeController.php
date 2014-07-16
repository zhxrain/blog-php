<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showIndex');
	|
	*/


	public function showIndex()
	{
    //App::bind('test', function($app){
      //return new User();
    //});
    //Debugbar::info(App::make('test'));
    $keyword = Input::get('keyword');
    $posts = Post::where('status', 'LIKE', 'published')
                 ->where(function($query) use ($keyword)
                 {
                   $query->where('title', 'LIKE','%'.$keyword.'%')
                         ->orWhere('content', 'LIKE','%'.$keyword.'%')
                         ->orWhere('tags', 'LIKE','%'.$keyword.'%')
                         ->orWhere('markdown', 'LIKE','%'.$keyword.'%', 'AND');
                 })
                 ->paginate(5);
		return View::make('blog-home', array('posts' => $posts));
	}

}
