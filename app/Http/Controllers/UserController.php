<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Validator;
use Hash;
use App\User;
use App\Role;
use Auth;
use Excel;

class UserController extends Controller
{
   
//Download..........................................................................................................
public function Download_User_List($type)
    {
        $data= User::get()->toArray();
        return Excel::create('Downloaded User list', function($excel) use
           ($data) {
           $excel->sheet('mySheet', function($sheet) use ($data)
              {
                 $sheet->fromArray($data);
              });
          })->download($type);
    }


//REGISTER & LOGIN PAGE.........................................................................................

    public function register_page(){
        return view('backend/modules/user/register_page');
    }
    public function login_page()
    {
        return view('backend/modules/user/login_page');
    }




//LOGIN.......................................................................................................
        public function loginUserAction(Request $request)
    {
        Validator::make($request->all(), [
        'Email' => 'required',
        'Password' => 'required',
        ])->validate();

          // echo $request->input('email');die;

        if (Auth::attempt(['email' => $request->input('Email'), 'password' => $request->input('Password')])){

           
               return Redirect('dashboard'); 
          
        

    }
        else{
        echo "Email or Password is incorrect";
        return view('backend/modules/user/login_page');  }
    }

//LOGOUT.......................................................................................................
        public function LogOut()
    {
         auth::logout();
         return Redirect('/');
    }

//............................................................................................................
    public function store(Request $request)
    {

        Validator::make($request->all(), [            
            'name' => 'required',
            'email' => 'required|unique:users|max:255',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ])->validate();


        $q=new user();
        $q->name=$request->input('name');
        $q->email=$request->input('email');
        $q->password=Hash::make($request->input('password'));
        $q->save();
        $q->attachrole(2);
        return Redirect('login_page');
    }
//............................................................................................................

    public function show()
    {

        $users=user::all();
        $rols=Role::all(); 
         // ye rols wala protion Asign role mein use howa hai.. baki jo role show ki td mein show 
         // ho raha hai wo automatically user k table se joint hai... 
        return view('backend/modules/user/show_user',compact('users','rols'));
    }

//............................................................................................................
    public function edit($id)
    {
        $users=user::find($id);
        return view('backend/modules/user/edit_user', compact('users'));
    }

//............................................................................................................
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [            
            'name' => 'required',
            'email' => 'required|max:255',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ])->validate();


        $q=user::find($id);
        $q->name=$request->input('name');
        $q->email=$request->input('email');
        $q->password=Hash::make($request->input('password'));
        $q->update();
        return Redirect('show_user');
    }

//............................................................................................................
    public function destroy($id)
    {

        $users=user::find($id);
        $users->delete();
        return response()->json([ ]); //jis page pe del ka button laga howa hai wahan ajax ki hai
                                      //or ye line ajax wali hai jo page ko refresh kiye bgair Redirect::back krwato hai 
        // return Redirect::back();
    }

//update_role.....................................................................................................

    public function AsignRole(Request $request,$id)
    {
            $user=user::find($id);
           // print_r($request->input('roles')); die;
           $role=$request->input('role');
           DB::table('role_user')->where('user_id',$id)->delete();
           $user->attachrole($role); 

           return Redirect('show_user');
   }  


}
