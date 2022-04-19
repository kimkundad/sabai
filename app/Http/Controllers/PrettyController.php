<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use App\pretty;

class PrettyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = pretty::Orderby('id', 'desc')->paginate(15);

      $data['objs'] = $objs;
      return view('admin.pretty.index', $data);
    }

    public function post_status_pretty(Request $request){

        $user = pretty::findOrFail($request->user_id);
   
                  if($user->status == 1){
                      $user->status = 0;
                  } else {
                      $user->status = 1;
                  }
   
   
          return response()->json([
          'data' => [
            'success' => $user->save(),
          ]
        ]);
   
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
        $data['url'] = url('admin/pretty');
        return view('admin.pretty.create', $data);
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
        $image_x = $request->file('image_x');
        $image_y = $request->file('image_y');
        $video = $request->file('video');

        $this->validate($request, [
             'image_x' => 'required|max:8048',
             'image_y' => 'required|max:8048',
             'name' => 'required',
             'live_date' => 'required',
             'title' => 'required',
             'detail' => 'required'
         ]);


        $path1 = 'assets/pretty/';
        $filename1 = (\random_int(1000000, 9999999))."-".$image_x->getClientOriginalName();
        $image_x->move($path1, $filename1);

        $path2 = 'assets/pretty/';
        $filename2 = (\random_int(1000000, 9999999))."-".$image_y->getClientOriginalName();
        $image_y->move($path2, $filename2);

        

        if($video != NULL){

            $path3 = 'assets/video/';
        $filename3 = (\random_int(1000000, 9999999))."-".$video->getClientOriginalName();
        $video->move($path3, $filename3);

            $package = new pretty();
      $package->name = $request['name'];
      $package->detail = $request['detail'];
      $package->live_date = $request['live_date'];
      $package->image_x = $filename1;
      $package->image_y = $filename2;
      $package->video = $filename3;
      $package->tag = $request['tag'];
      $package->title = $request['title'];
      $package->stream_url = $request['stream_url'];
      $package->live_status = $request['live_status'];
      $package->phone = $request['phone'];
      $package->line = $request['line'];
      $package->time = $request['time'];
      $package->save();

        }else{

            $package = new pretty();
      $package->name = $request['name'];
      $package->detail = $request['detail'];
      $package->live_date = $request['live_date'];
      $package->image_x = $filename1;
      $package->image_y = $filename2;
      $package->tag = $request['tag'];
      $package->title = $request['title'];
      $package->stream_url = $request['stream_url'];
      $package->live_status = $request['live_status'];
      $package->phone = $request['phone'];
      $package->line = $request['line'];
      $package->time = $request['time'];
      $package->save();

        }

      

      return redirect(url('admin/pretty/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');

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
        $obj = pretty::find($id);
        $data['url'] = url('admin/pretty/'.$id);
        $data['method'] = "put";

       // dd($obj);
        $data['objs'] = $obj;
        return view('admin.pretty.edit', $data);
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
        $image_x = $request->file('image_x');
        $image_y = $request->file('image_y');
        $video = $request->file('video');

        $this->validate($request, [
             'name' => 'required',
             'live_date' => 'required',
             'title' => 'required',
             'detail' => 'required'
         ]);

      $package = pretty::find($id);
      $package->name = $request['name'];
      $package->detail = $request['detail'];
      $package->live_date = $request['live_date'];
      $package->tag = $request['tag'];
      $package->title = $request['title'];
      $package->stream_url = $request['stream_url'];
      $package->live_status = $request['live_status'];
      $package->phone = $request['phone'];
      $package->line = $request['line'];
      $package->time = $request['time'];
      $package->save();

    if($image_x != NULL){

        if(isset($package->image_x)){
            $file_path = 'assets/pretty/'.$package->image_x;
             unlink($file_path);
          }

        $path1 = 'assets/pretty/';
        $filename1 = (\random_int(1000000, 9999999))."-".$image_x->getClientOriginalName();
        $image_x->move($path1, $filename1);

        $package = pretty::find($id);
        $package->image_x = $filename1;
        $package->save();
    }

    if($image_y != NULL){

        if(isset($package->image_y)){
            $file_path = 'assets/pretty/'.$package->image_y;
             unlink($file_path);
          }

        $path2 = 'assets/pretty/';
        $filename2 = (\random_int(1000000, 9999999))."-".$image_y->getClientOriginalName();
        $image_y->move($path2, $filename2);

        $package = pretty::find($id);
      $package->image_y = $filename2;
        $package->save();
    }

    if($video != NULL){

        if(isset($package->video)){
            $file_path = 'assets/video/'.$package->video;
             unlink($file_path);
          }

        $path3 = 'assets/video/';
        $filename3 = (\random_int(1000000, 9999999))."-".$video->getClientOriginalName();
        $video->move($path3, $filename3);


        $package = pretty::find($id);
      $package->video = $filename3;
        $package->save();
    }


      return redirect(url('admin/pretty/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_pretty($id)
    {
        //
        $objs = DB::table('pretties')
            ->where('id', $id)
            ->first();

            if(isset($objs->image_x)){
                $file_path = 'assets/pretty/'.$objs->image_x;
                 unlink($file_path);
              }
              if(isset($objs->image_y)){
                $file_path = 'assets/pretty/'.$objs->image_y;
                 unlink($file_path);
              }
              if(isset($objs->video)){
                $file_path = 'assets/video/'.$objs->video;
                 unlink($file_path);
              }

             DB::table('pretties')->where('id', $id)->delete();
             return redirect(url('admin/pretty'))->with('delete','คุณทำการเพิ่มอสังหา สำเร็จ');
    }
}
