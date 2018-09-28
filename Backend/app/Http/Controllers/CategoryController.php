<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
use App\Product;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return  Category::where('parent_id', '=' , 0)->orderBy('id','desc')->get();

       
    }

    public function featured_category()
    {
       //return  Category::inRandomOrder()->limit(6)->where('featured' , 1)->get();
      // return Category::where('featured',1)->orderBy(DB::raw('RAND(6)'))->get();
      
      // $listing_count = Product::where('category_id', $id)->count();
    
      
       return DB::table("categories")

       ->select("categories.*", DB::raw("count(products.id) as count"))

       ->join("products","products.category_id","=","categories.id")

       ->groupBy("categories.id")

       ->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->featured = $request->featured;
        $category->save();
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=array(
            'category_name'=>$request->category_name,
            'featured' => $request->featured,
            
           
        );
        Category::find($id)->update($data);
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Delete the Product
         if ($id != null) {
            $category = Category::find($id);
            $category->delete();    
        }
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    }
}
