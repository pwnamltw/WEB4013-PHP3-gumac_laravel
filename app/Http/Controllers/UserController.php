<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Expr\New_;

class UserController extends Controller
{
    public function Login(){
        return view('login');
    }

    public function postLogin(Request $request)
    {
     
      $data=$request->validate([
        'email' => 'required|email',
        'password' => 'required|min:8',
      ]);
      $remember = $request->input('remember_token');
      $user = User::where('email',$data['email'])->first();
      $login=false;
      if(isset($user)){
          $login = Hash::check($data['password'],$user->password);
      }
      if($login){
          Auth::login($user,$remember);
          if(Auth::user()->role == 0){
            return redirect()->route('home');
          }else{
            return redirect()->route('admin');
          }
      }else{
        session()->put('message','Email hoặc mật khẩu không đúng');
        return back();
      }
    }

    public function dangky(){
        return view('dangky');
    }
    
    public function postdangky(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_cf' =>'required|min:8',
        ]);
        $user = User::where('email', $data['email'])->first();
        if(isset($user)){
            session()->put('message','Email đã tồn tại');
            return back();
        }
        if($data['password']!=$data['password_cf']){
            session()->put('message','Mật khẩu không khớp');
            return back();
        }
        $user = new User();
        $user = User::create([
            'email' => $data['email'],
            'password' =>  $data['password']
        ]);
        return redirect()->route('login');
    }


    public function info(){
        $user = Auth::user();
        return view('info', compact('user'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');  
    }
    public function postinfo(Request $request){
        $data=$request->validate([
            'name' => 'nullable|string',
            'avatar' => 'nullable|file|mimes:jpeg,png,jpg,svg|max:2048',
            'gioitinh' => 'nullable|string',
            'email' => 'nullable|email',
            'sdt' => 'nullable|string',
            'diachi' => 'nullable|string',
            'ngaysinh' => 'nullable|string',
        ]);
        $user = Auth::user();
        if ($request->hasFile('avatar')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('uploaded'), $imageName);
            $data['avatar'] = $imageName;
    
            // Nếu người dùng đã có ảnh trước đó, xóa ảnh cũ
            if ($user->avatar) {
                $imgPath = "uploaded/" . $user->avatar;
                if (file_exists($imgPath)) {
                    unlink($imgPath);
                }
            }
        } else {
            // Nếu không có ảnh mới, giữ lại ảnh cũ
            $data['avatar'] = $user->avatar;
        }
        $user->update($data);
        return redirect()->route('info');
    }   
    
}
