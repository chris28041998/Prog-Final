<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use  Illuminate\Database\Eloquent\Builder;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();

        return view('products.index', compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();

        return view('products.create', compact('categories'));
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
        $datas = $this->validate($request, [

            'category_id' => 'required',
            'name' => 'required|string|max:25',
            'price' => 'required|integer',
            'description' => 'required',
            'photo' => 'image|mimes:jpg,png,jpeg'
        ]
        );

         $image = $request->file('photo');
         $extension_img = strtolower($image->getClientOriginalExtension());
         $path_tmp = "images/products/";
         $name_img = hexdec(uniqid());
         $tmp_image = $name_img. '.' .$extension_img;

         $image_final = $path_tmp.$tmp_image;  //to DB

         $image->move($path_tmp, $tmp_image);

        // Product::create($datas)

        Product::insert([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'photo' => $image_final

        ]);

        return redirect()->route('products.index')->with('success', 'Product added successfully');





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
