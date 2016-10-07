<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Product;

use Illuminate\Http\Request;

class AdminProductsController extends Controller
{

    private $products;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $product)
    {
        $this->products = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = $this->products->all();
        return view('product', compact('products'));
    }

    public function create()
    {
        return 'Create Product';
    }

    public function update($id)
    {
        return "Update Product Id = $id";
    }

    public function delete($id)
    {
        return "Delete Product Id = $id";
    }

}
