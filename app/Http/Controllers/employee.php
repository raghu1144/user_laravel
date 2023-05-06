<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee_details;
use DB;

class employee extends Controller
{

    public function login(){
        // echo "Login page";
        $url = url('/');
        $data = compact('url');
        if(session()->has('email')){
            return redirect('/user_view');
        }
        return view('login')->with($data);
    }

    public function login_success(request $request){
        // echo "nvnncvvv";
        // dd($request);
        // return $email;
        
        $url = url('/login_post');
        $data = compact('url');
        // return view('login')->with($data);
        // echo "Hello";
    
        $email = $request['email'];
        $email1 = DB::table('employee_details')->where('email', $email);
        if(($email1)->exists()){
            // return "found";
            // set seesion here
            $set_seession = $email;
            // return $set_seession;
            $request->session()->put("email", $set_seession);
            // return session('email');
            return redirect('/user_view');
        }
        else{
            return redirect('/');
        }
        // $email1 = "select * from employee_details where `email` = '$email'";
        // return $email1;

        // if (employee_details::where('email',$email)->exists()) {
        //     return "user found";
        // }else{
        //     return "Noot Found";
        // }
    }

    public function logout_session(){
        // echo "logout";
        if(session()->has('email')){
            session()->pull('email',null);
        }
        return redirect('/');
    }

    function index(){
        $url = url('/user_register');
        $title = "User Registration";
        $employee_update = new employee_details();
        $daata = compact('url','title','employee_update');
        return view('user')->with($daata);
    }


    function store(request $request){
        // echo "Store value";
    
        // echo "<pre>";
        // print_r($request->toArray());
        // echo "</pre>";


        $employee = new employee_details();

        $employee->name = $request['name'];
        $employee->email = $request['email'];
        $employee->mobile = $request['mobile'];
        $employee->msg = $request['msg'];
        $employee->department = $request['department'];

        $employee->save();
        return redirect('/user_view');
    }


    function view(){
        // echo "View user data here";
        $employee_data = employee_details::all();
        // echo "<pre>";
        // print_r($employee_data );
        // echo "</pre>";

        $data = compact('employee_data');
        return view('user_view')->with($data);
    }


    public function delete($id)
    {
        $employee_delete = employee_details::find($id);
        if(!is_null($employee_delete)){
            $employee_delete->delete();
            return redirect()->back();
        }else{
            echo "Customer data not found";
        }
        return redirect('/user_view');
        // echo "<pre>";
        // print_r($employee_delete);
    }

    public function edit($id)
    {
        // echo "update record";
        $employee_update = employee_details::find($id);
        if(is_null($employee_update))
        {
            // not found;
            return redirect('/user_view');

        }
        else
        {
            $url =  url('/update') ."/". $id;
            $title = "Update User Form";
            $daata = compact('employee_update', 'url', 'title');
            return view('user')->with($daata);
        }
    }

    public function update_data($id, request $request){
        // echo "Finally update record";
        $updata_data = employee_details::find($id);


        // $employee_update = new employee_details();

        $updata_data->name = $request['name'];
        $updata_data->email = $request['email'];
        $updata_data->mobile = $request['mobile'];
        $updata_data->msg = $request['msg'];
        $updata_data->department = $request['department'];

        $updata_data->save();
        return redirect('/user_view');

    }
}
