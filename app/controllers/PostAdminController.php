<?php

class PostAdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
    if(Auth::check())
    {
      $posts = Post::all();
      return View::make('index', array('posts' => $posts));
    }
    return Redirect::to("/admin/login");
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

  public function login()
  {
    if(Auth::check())
    {
      return Redirect::to("admin");
    }
    else
      return View::make('login');

  }

  public function postLogin()
  {
    $username = Input::get('username');
    $password = Input::get('password');
    if (Auth::attempt(array('name' => $username, 'password' => $password)))
    {
      return Redirect::intended('admin');
    }
    return Redirect::to('admin/login')
      ->with('error', "Oops! Username or password don't match");
  }

  public function showEditor($id)
  {
    $post = Post::where('id', $id)
      ->first();
    return View::make('editor', array('post' => $post));
  }

  public function createEditor()
  {
    return View::make('editor');
  }
}
