<?php

class PostsController extends \BaseController {

	protected $layout = 'layouts.admin';

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->title = 'Posts';
		$this->layout->content = view::make('posts.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		// baca input
		$input = Input::only('title', 'content');

		// validasi input
		$v = Validator::make($input, Posts::$postRule);
        if ( $v->fails() ) return Redirect::back()->withErrors($v);

        // save to db
        $post = new Posts;
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->author = Auth::user()->username;
        $post->save();

        return Redirect::route('home');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
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
	 * GET /posts/{id}/edit
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
	 * PUT /posts/{id}
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
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}