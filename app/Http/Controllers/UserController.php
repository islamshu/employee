<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function get_login(){
        return view('admin-dashbord.auth.login');
    }
    public function edit_profile()
    {
        return view('admin-dashbord.employee.edit_profile');
    }
    public function post_login(Request $request){
        if(Auth::attempt($request->only('email','password'),$request->filled('remember'))){
            return redirect()->route('user.dashboard');            
        }
        return redirect()->back()->with(['error'=>'خطأ بالبيانات']);
    }
    public  function dashboard()
    {
      return view('admin-dashbord.index');
    }
    public function index(){
        return view('admin-dashbord.employee.index')->with('employees',User::get());
    }
    public function create()
    {
        return view('admin-dashbord.employee.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->type = 'user';
        $user->save();
        return redirect()->route('employees.index')->with(['success'=>'تمت الإضافة بنجاح']);
    }
    public function edit($id){
        $emp = User::find($id);
        return view('admin-dashbord.employee.edit')->with('employe',$emp);
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id,
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password != null){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('employees.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    public function update_profile(Request $request){
        $user = auth()->user();
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id,
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password != null){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return redirect()->route('employees.index')->with(['success'=>'تمت التعديل بنجاح']);
    }

    
    public function destroy($id){
        $emp = User::find($id)->delete();
        return redirect()->route('employees.index')->with(['success'=>'تك الحذف بنجاح']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.get_login');
    }
}
