<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  Product::all();
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
        /* $this->validate($request,[
           
            'zip'=>'string|regex:/[0-9]{6}/|digits:6',
        ]); */
       /*  if($request->phone1 !="")
        {
            $this->validate($request,[
                'phone1'=>'string|regex:/[0-9]{10}/|digits:10',
            ]);
        } */

        Product::create([
            'title'=>$request->title,
            'add1'=>$request->add1,
            'add2'=>$request->add2,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'imagepath'=>$request->images,
            'offers'=>$request->offers,
            'type'=>$request->type,
            'events'=>$request->events,
            'category_id'=>$request->category_id,
        ]);
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
        return Product::find($id);
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
        $data=array(
            
            'title'=>$request->title,
            'add1'=>$request->add1,
            'add2'=>$request->add2,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'zip'=>$request->zip,
            'phone1'=>$request->phone1,
            'phone2'=>$request->phone2,
            'imagepath'=>$request->images,
            'offers'=>$request->offers,
            'type'=>$request->type,
            'events'=>$request->events,
            'category_id'=>$request->category_id,
           
        );
        Product::find($id)->update($data);
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
        if ($id != null) {
            $product = Product::find($id);
            $product->delete();    
        }
        return response()->json([
            'data ' => "success" ,
           
            ],200);
    
    }


    public function uploadMultiFiles(Request $request) 
	 	{

            return $request;
            die;

             $data[]="";	 		
            if($request->hasfile('fileInfo'))

            {
                return "hiiii";
                die;
   
               foreach($request->file('fileInfo') as $file)
   
               {
   
                   $name=$file->getClientOriginalName();
   
                   $file->move(public_path().'/files/', $name);  
   
                   $data[] = $name;  
   
               }
   
            }
   
   
   
          /*   $file= new File();
   
            $file->filenames=json_encode($data);
   
            $file->save(); */

			return json_encode($data);
	 	}
	 

}
