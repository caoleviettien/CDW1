<?php

namespace App\Http\Controllers;

use App\Model\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UpdateController extends Controller {
    public function index() {
        return view('/update');
    }

    public function getInfor() {
        $gInfor = DB::table('users')->where([
                    ['email', Session::get('email')],
                ])->get();
        return view('/update', compact('gInfor'));
    }

    public function postUpdate(Request $request) {
        $validator = Validator::make($request->all(), [
                    'name' => 'required|string',
                    'password' => '',
                    'phone' => 'integer',
                        ], [
        ]);

        if ($validator->fails()) {
            return redirect()->route('update')->withErrors($validator);
        } else {
            $email = Session::get('email');
            $users = Login::where('email', $email)->first();
            if ($request->password == null) {
                $pass = $users->password;
            } else {
                $pass = $request->password;
            }
            DB::table('users')
                    ->where('email', $email)
                    ->update([
                'name' => $request->name,
                'password' => bcrypt($pass),
                'phone' => $request->phone,
            ]);
            return redirect()->route('update')->with('success', 'Cập nhật thành công!');
        }
    }
}
