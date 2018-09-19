<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeSub(Request $request,$id)
    {

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->parent_id = $id;
        $category->save();
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    }
     public function showSub($id)
    {
         return Category::where('parent_id',$id)->get();
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
            $product = Category::find($id);
            $product->delete();    
        }
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    }
}
