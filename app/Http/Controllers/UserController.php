<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Role;
use App\Models\User;
use App\Models\User_Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {   $user = User::select('users.*', 'groups.name as group')
                ->join('user__groups', 'users.id', '=', 'user__groups.id_user')
                ->join('groups', 'groups.id', '=', 'user__groups.id_group')
                ->get();
        $group = Group::all();
        $role = Role::all();
        return view('quanly.nhanvien', compact(['user', 'group', 'role']));
    }

    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ], [
            'name.required' => 'Yêu cầu nhập Tên nhân viên',
            'email.required' => 'Yêu cầu nhập Email',
            'email.email' => 'Định dạng Email chưa chính xác',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Yêu cầu nhập Mật khẩu',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->messages(),
            ]);
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            $user->phone = $request->input('phone');
            $user->address = $request->input('address');
            $user->id_role = $request->input('role');
            // $user->gender  = $request->input('gender');
            $user->save();

            $user_group = new User_Group();
            $user_group->id_user = $user->id;
            $user_group->id_group = $request->input('group');
            $user_group->save();

            $group = Group::where('id',$user_group->id_group)->first();

            return response()->json([
                'status' => 200,
                'message' => 'Thêm thành công',
                'user' => $user,
                'group' => $group,
            ]);
        }
    }

    public function detailUser($id)
    {
        $user = User::find($id);
        $user__group = User_Group::where('id_user',$id)->first();

        if($user) {
            return response()->json([
                'status'=>200,
                'user'=> $user,
                'user__group'=> $user__group,
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'message'=>'Không tìm thấy',
            ]);
        }
    }

    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required',
        ], [
            'name.required' => 'Yêu cầu nhập Tên nhân viên',
            'email.required' => 'Yêu cầu nhập Email',
            'email.email' => 'Định dạng Email chưa chính xác',
            'email.unique' => 'Email đã được sử dụng',
            'password.required' => 'Yêu cầu nhập Mật khẩu',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        } else {
            $user = User::find($id);
            if($user) {
                $user->name = $request->input('name');
                $user->email = $request->input('email');
                $user->password = Hash::make($request->input('password'));
                $user->phone = $request->input('phone');
                $user->address = $request->input('address');
                $user->id_role = $request->input('role');
                // $user->gender  = $request->input('gender');
                $user->update();

                $user_group = User_Group::where('id_user',$id)->first();
                $user_group->id_group = $request->input('group');
                $user_group->update();

                $group = Group::where('id',$user_group->id_group)->first();

                return response()->json([
                    'status'=>200,
                    'message'=>'Cập nhật thành công',
                    'user'=> $user,
                    'group'=> $group,
                ]);
            } else {
                return response()->json([
                    'status'=>404,
                    'message'=>'Không tìm thấy',
                ]);
            }
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Xóa thành công',
        ]);
    }
}
