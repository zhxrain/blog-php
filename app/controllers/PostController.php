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
    $posts = Post::all();
    return Response::json(array(
      'error' => false,
      'posts' => $posts->toArray()),
      200
    );
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
		//
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
		//
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
	}

}
