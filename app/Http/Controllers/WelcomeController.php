<?php namespace CodeCommerce\Http\Controllers;

class WelcomeController extends Controller {

	private $categories;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Category $category)
	{
		$this->middleware('guest');
		$this->categories = $category;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	public function exemplo()
	{
		$categories = $this->categories->all();

		return view('exemplo', compact('categories'));
	}
}
