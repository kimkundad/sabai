<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pretty;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {

        $obj1 = pretty::where('live_status', 1)->first();
        $data['obj1'] = $obj1;

        $obj2 = pretty::where('status', 1)->get();
        $data['obj2'] = $obj2;

        return view('welcome', $data);
    }

    public function contact(){
        return view('contact');
    }

    public function pretty_detail($id){

        $package = pretty::find($id);
        $package->view += 1;
        $package->save();

        $objs = pretty::find($id);
        $data['objs'] = $objs;

        return view('pretty_detail', $data);
    }

    public function pretty_live($id){

     
        if(Auth::user()->endday < date('Y-m-d')){
            return redirect(url('contact'));
          // return 'xxxx '.Auth::user()->endday;
        }

        $package = pretty::find($id);
        $package->view += 1;
        $package->save();

        $objs = pretty::find($id);
        $data['objs'] = $objs;

        return view('pretty_live', $data);

    }
}
