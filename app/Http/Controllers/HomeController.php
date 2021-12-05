<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$data="sshan02001@gmail.com";
        $data=[
            'name'=>'Khing',
            'email'=>'.com',
            'address'=>'mdy'
        ];

       
        $products=[
            [
                'name'=>'Dr .KHIN',
                'type'=>'.juice',
                'price'=>'1000'
            ],
            [
                'name'=>'Dr. HNAIN',
                'type'=>'.juice',
                'price'=>'1000'
            ],
            [
                'name'=>'Dr. MYINT',
                'type'=>'.juice',
                'price'=>'1000'
            ],
            [
                'name'=>'Dr. MYINT MYINT',
                'type'=>'.juice',
                'price'=>'1000'
            ],
            
        ];
        $username='khin nyein chan';
        //return view('home',['email'=>$data,'address'=>'hpaan']);
        //return view('home',['data'=>$data]);
        //return view('home',['data'=>$data])->with('product',$products);
        return view('home',compact('data','username'))->with('products',$products);
       //return view('home',compact('data','username'))->with('doctors',$doctors);
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
