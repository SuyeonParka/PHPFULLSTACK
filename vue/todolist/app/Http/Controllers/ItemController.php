<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $result = item::orderBy('created_at', 'desc')->get();
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
    public function store(Request $req)
    {
        $result = new item;
        // req안에 item이 있을 거고 item 안에 content라는 애한테서 가져옴요
        $result->content = $req->item["content"];
        $result->save();
        return $result;

        // {
        //     "item" : {
        //         "content" : "내용",
        //         "completed" : true,
        //     }
        // }
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
    public function update(Request $req, $id)
    {
        $result = item::find($id);

        if($result) {
            $result->completed = $req->item["completed"] ? true : false;
            $result->completed_at = $req->item["completed"] ? Carbon::now() : null;
            $result->save();
            return $result;
        }
        return 'No Data.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = item::find($id);

        if($result) {
            $result->delete();
            return 'Successfully Deleted';
        }
        return 'No Data.';
    }
}
