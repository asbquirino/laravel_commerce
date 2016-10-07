<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

use Illuminate\Http\Request;

class AdminCategoriesController extends Controller
{

    private $categories;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->categories = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->categories->all();
        return view('category', compact('categories'));
    }

    public function create()
    {
        return "Create Category";
    }

    public function update($id)
    {
        return "Update Category Id = $id";
    }

    public function delete($id)
    {
        return "Delete Category Id = $id";
    }

}
