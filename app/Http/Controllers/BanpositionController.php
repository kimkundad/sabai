<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\banposition;

class BanpositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = banposition::Orderby('id', 'desc')->paginate(15);

      $data['objs'] = $objs;
      return view('admin.ban_position.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['method'] = "post";
        $data['url'] = url('admin/ban_position');
        return view('admin.ban_position.create', $data);
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
        $this->validate($request, [
            'position' => 'required'
        ]);

       $package = new banposition();
       $package->position = $request['position'];
       $package->save();

       return redirect(url('admin/ban_position/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $obj = banposition::find($id);
        $data['url'] = url('admin/ban_position/'.$id);
        $data['method'] = "put";
        $data['objs'] = $obj;
        return view('admin.ban_position.edit', $data);
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
        $this->validate($request, [
            'position' => 'required'
        ]);

       $package = banposition::find($id);
       $package->position = $request['position'];
       $package->save();

       return redirect(url('admin/ban_position/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_position($id)
    {
        //
        $obj = DB::table('banpositions')
        ->where('id', $id)
        ->delete();
        return redirect(url('admin/ban_position/'))->with('delete','ลบข้อมูล สำเร็จ');
    }
}
