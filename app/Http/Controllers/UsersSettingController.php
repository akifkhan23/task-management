<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UsersSettingController extends Controller
{
    public function users_detail(Request $request)
    {

        if($request->value):
           return view('userSetting.users_info.'.$request->value);
        endif;
        return  view('userSetting.users_data');
    }

    public function profile_update(Request $request ,$id)
    {
        DB::beginTransaction();
        try {

        $request = $request->all();
        $attachment = $request->file('image');
         $request['image'] =$attachment->store('image') ?? '';
         User::find($request->id)->update($request);
         DB::commit();
     }
     catch (Exception $e) {
         DB::rollBack();
         return response()->json(['error' => $e->getMessage()]);
     }
     return response()->json(['success' => 'successfully Submit.']);
    }
}
