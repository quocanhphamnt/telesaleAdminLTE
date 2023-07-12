<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupController extends Controller
{
    public function index()
    {
        $group = Group::select('groups.*', 'users.name as user')
                        ->leftJoin('users', 'users.id', '=', 'groups.id_user')
                        ->get();
        $user = User::select('users.id', 'users.name')
                    ->where('id_role', 2)
                    ->get();
        return view('quanly.nhom', compact(['group', 'user']));
    }

    public function addGroup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:groups',
        ], [
            'name.required' => 'Yêu cầu nhập Tên nhóm',
            'name.unique' => 'Tên nhóm đã tồn tại',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->messages(),
            ]);
        } else {
            $group = new Group();
            $group->name = $request->input('name');
            $group->describe = $request->input('describe');
            $group->id_user = $request->input('user');
            $group->save();

            $user = User::select('users.name')
                    ->where('id',$group->id_user)
                    ->first();

            return response()->json([
                'status' => 200,
                'message' => 'Thêm thành công',
                'group' => $group,
                'user' => $user,
            ]);
        }
    }

    public function detailGroup($id)
    {
        $group = Group::find($id);
        if($group) {
            return response()->json([
                'status'=>200,
                'group'=> $group,
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'message'=>'Không tìm thấy',
            ]);
        }
    }

    public function updateGroup(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:groups,name,'.$id,
        ], [
            'name.required' => 'Yêu cầu nhập Tên nhân viên',
            'name.unique' => 'Tên nhóm đã tồn tại',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        } else {
            $group = Group::find($id);
            if($group) {
                $group->name = $request->input('name');
                $group->id_user = $request->input('user');
                $group->describe = $request->input('describe');
                $group->update();

                $user = User::select('users.name')
                    ->where('id',$group->id_user)
                    ->first();

                return response()->json([
                    'status'=>200,
                    'message'=>'Cập nhật thành công',
                    'group'=> $group,
                    'user'=> $user,
                ]);
            } else {
                return response()->json([
                    'status'=>404,
                    'message'=>'Không tìm thấy',
                ]);
            }
        }
    }

    public function deleteGroup($id)
    {
        $group = Group::find($id);
        $group->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Xóa thành công',
        ]);
    }
}
