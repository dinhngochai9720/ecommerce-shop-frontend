<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $category;
    private $product;

    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addToCart($id)
    {


        // session()->flush('cart'); //clear cart data

        $product = $this->product->find($id);

        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        } else {
            $cart[$id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => $product->feature_image_path
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }


    public function showCart()
    {
        //
        // echo '<pre></pre>';
        // print_r(session()->get('cart'));

        $categoryParents = $this->category->where('parent_id', 0)->latest()->take(3)->get();
        $carts = session()->get('cart');
        return view('cart.showCart', compact('categoryParents', 'carts'));
    }


    public function updateCart(Request $request)
    {
        // dd($request->all());
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart'); //carts ban dau

            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts); //update carts

            $carts = session()->get('cart'); //carts sau khi update
            $cart_component = view('cart.cartComponent', compact('carts'))->render();

            return response()->json([
                'cart_component' => $cart_component,
                'code' => 200
            ], 200);
        }
    }

    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $carts = session()->get('cart'); //carts ban dau
            unset($carts[$request->id]);


            session()->put('cart', $carts); //update carts

            $carts = session()->get('cart'); //carts sau khi update
            $cart_component = view('cart.cartComponent', compact('carts'))->render();

            return response()->json([
                'cart_component' => $cart_component,
                'code' => 200
            ], 200);
        }
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