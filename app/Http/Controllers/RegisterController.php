<?php
namespace App\Http\Controllers;

use App\Model\Register;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller{

public function index(){
    return view('/register');
}

public function postRegister(Request $request) {
    $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:users',
                'password' => 'required|min:8',
                'name' => 'required',
                'phone' => 'required',
                    ], [
            'email.required'=>'Email không hợp lệ !',
            'password.required'=>'Password từ 8 kí tự trở lên',
            'name.required'=>'Tên không hợp lệ',
            'phone.required'=>'Số điện thoại không hợp lệ',
    ]);
    if ($validator->fails()) {
        //($validator->errors());
        return redirect()->route('register')->withErrors($validator);
    } else {
        DB::table('users')->insert([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'phone' => $request->phone,
        ]);
        return redirect()->route('login')->with('success', 'Đăng ký thành công!');
    }
}

}