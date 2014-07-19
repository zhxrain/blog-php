<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
    $keyword = Input::get('keyword');
    $posts = Post::where('status', 'LIKE', 'published')
                 ->where(function($query) use ($keyword)
                 {
                   $query->where('title', 'LIKE','%'.$keyword.'%')
                         ->orWhere('summary', 'LIKE','%'.$keyword.'%')
                         ->orWhere('tags', 'LIKE','%'.$keyword.'%')
                         ->orWhere('markdown', 'LIKE','%'.$keyword.'%', 'AND');
                 })
                 ->orderBy('id', 'DESC')
                 ->paginate(5);
		return View::make('blog-home', array('posts' => $posts));
    /*
    $posts = Post::all();
    return Response::json(array(
      'error' => false,
      'posts' => $posts->toArray()),
      200
    );
     */
  }

  /**
   * Show the form for creating a new resource.
   *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$title = Input::get('title');
		$markdown = Input::get('markdown');
		$status = Input::get('post_status');
    $author = Auth::user()->name;
    $content = Input::get('content');
    $summary = strip_tags($content);

    if (strlen($summary) > 100) {
      // truncate string
      $stringCut = substr($summary, 0, 100);
      // make sure it ends in a word so assassinate doesn't become ass...
      $summary = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
    }

    $post = new Post;
    $post->title = $title;
    $post->markdown = $markdown;
    $post->status = $status;
    $post->summary = $summary;
    $post->author = $author;
    $post->save();
    return Response::json("Create post success", 200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
    $post = Post::where('id', $id)
      ->first();
    $comments = Post::find($id)->comments;

		return View::make('blog-post', array('post' => $post));
    /*
    return Response::json(array(
      'error' => false,
      'post' => $post->toArray(),
      'comments' => $comments->toArray()),
      200
    );
     */
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$title = Input::get('title');
		$markdown = Input::get('markdown');
		$status = Input::get('status');

    $content = Input::get('content');
    $summary = strip_tags($content);

    if (strlen($summary) > 200) {
      // truncate string
      $stringCut = substr($summary, 0, 200);
      // make sure it ends in a word so assassinate doesn't become ass...
      $summary = substr($stringCut, 0, strrpos($stringCut, ' ')).'  ......';
    }


    $post = Post::find($id);
    $post->title = $title;
    $post->markdown = $markdown;
    $post->summary = $summary;
    $post->status = $status;
    $post->save();
    return Response::json("Update post success", 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
    if(Auth::check()){
      $post = Post::find($id);
      $post->comments()->delete();
      $post->delete();
      return Response::json('success', 200);
    }
    return Redirect::to('admin/login')
      ->with('error', "Please login at first.");
	}

  public function search()
  {
    $keyword = Input::get('keyword');
    $posts = Post::where('status', 'LIKE', 'published')
                 ->where(function($query) use ($keyword)
                 {
                   $query->where('title', 'LIKE','%'.$keyword.'%')
                         ->orWhere('summary', 'LIKE','%'.$keyword.'%')
                         ->orWhere('tags', 'LIKE','%'.$keyword.'%')
                         ->orWhere('markdown', 'LIKE','%'.$keyword.'%', 'AND');
                 })
                 ->paginate(5);
		return View::make('blog-home', array('posts' => $posts));
  }

  public function imgupload()
  {
    $file = Input::file('file'); // your file upload input field in the form should be named 'file'

    $destinationPath = 'uploads/'.str_random(8);
    Debugbar::error($destinationPath);
    $filename = $file->getClientOriginalName();
    //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
    $uploadSuccess = Input::file('file')->move('public/'.$destinationPath, $filename);

    if( $uploadSuccess ) {
      return Response::json(array('path' => '/'.$destinationPath.'/'.$filename), 200); // or do a redirect with some message that file was uploaded
    } else {
      return Response::json('error', 400);
    }
  }

}
