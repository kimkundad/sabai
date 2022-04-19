<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\banposition;
use App\Role;
use Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $objs = User::Orderby('id', 'desc')->paginate(15);

      $data['objs'] = $objs;
      return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data['pass'] = (\random_int(1000, 9999)).''.(\random_int(1000, 9999)).''.(\random_int(10, 99));
        $data['method'] = "post";
        $data['posi'] = banposition::all();
        $data['url'] = url('admin/user');
        return view('admin.user.create', $data);
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
            'phone' => 'required',
            'password' => 'required'
        ]);

        $ran = array("1483537975.png","1483556517.png","1483556686.png");

       $package = new User();
       $package->fname = $request['fname'];
       $package->lname = $request['lname'];
       $package->name = $request['phone'];
       $package->phone = $request['phone'];
       $package->email = (\random_int(1000000, 9999999)).'@gmail.com';
       $package->provider = 'email';
       $package->is_admin = false;
       $package->avatar = $ran[array_rand($ran, 1)];
       $package->password = Hash::make($request['password']);
       $package->code_user = $request['password'];
       $package->point = $request['point'];
       $package->fav = $request['fav'];
       $package->endday = $request['endday'];
       $package->save();

       $package
       ->roles()
       ->attach(Role::where('name', 'customer')->first());

       return redirect(url('admin/user/'))->with('add_success','คุณทำการเพิ่มอสังหา สำเร็จ');
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
        $obj = User::find($id);
        $data['posi'] = banposition::all();
        $data['url'] = url('admin/user/'.$id);
        $data['method'] = "put";

       // dd($obj);
        $data['objs'] = $obj;
        return view('admin.user.edit', $data);
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
            'phone' => 'required',
            'password' => 'required'
        ]);

      
       $package = User::find($id);
       $package->fname = $request['fname'];
       $package->lname = $request['lname'];
       $package->phone = $request['phone'];
       $package->password = Hash::make($request['password']);
       $package->code_user = $request['password'];
       $package->point = $request['point'];
       $package->fav = $request['fav'];
       $package->endday = $request['endday'];
       $package->save();

       return redirect(url('admin/user/'))->with('edit_success','คุณทำการเพิ่มอสังหา สำเร็จ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function del_user($id)
    {
        //

        if($id == 1 || $id == 2){
         
        }else{
            
            $obj = DB::table('users')
            ->where('id', $id)
            ->delete();

        }
        
        return redirect(url('admin/user/'))->with('delete','ลบข้อมูล สำเร็จ');
    }
}
