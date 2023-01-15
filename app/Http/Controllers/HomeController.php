<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    private $category;
    private $product;
    private $slider;

    public function __construct(Category $category, Product $product, Slider $slider)
    {
        $this->category = $category;
        $this->product = $product;
        $this->slider = $slider;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $categorys = $this->category->where('parent_id', 0)->latest()->get();
        $products = $this->product->latest()->take(6)->get();
        $sliders = $this->slider->latest()->take(3)->get();
        $categoryParents = $this->category->where('parent_id', 0)->latest()->take(3)->get();

        // dd($products);
        // $productsRecommend = $this->product->latest('views_count', 'desc')->take(6)->get();
        // dd($productsRecommend);

        return view('home.home', compact('categorys', 'products', 'sliders', 'categoryParents'));
    }

    public function test()
    {
        //
        return view('test');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}