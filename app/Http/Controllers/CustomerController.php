<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Group;
use App\Models\Region;
use App\Models\Status;
use App\Models\User;
use App\Models\User_Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::select('customers.*', 'groups.name as group', 'statuses.name as status', 'users.name as user')
            ->join('groups', 'groups.id', '=', 'customers.id_group')
            ->join('statuses', 'statuses.id', '=', 'customers.id_status')
            ->join('user__customers', 'customers.id', '=', 'user__customers.id_customer')
            ->join('users', 'users.id', '=', 'user__customers.id_user')
            ->get();
        $group = Group::all();
        $status = Status::all();
        $region = Region::all();
        $user = User::select('users.id','users.name')->get();
        return view('khachhang.danhsach', compact(['customer', 'group', 'status', 'region', 'user']));
    }

    public function addCustomer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:customers',
        ], [
            'name.required' => 'Yêu cầu nhập Tên khách hàng',
            'phone.required' => 'Yêu cầu nhập Số điện thoại',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'errors' => $validator->messages(),
            ]);
        } else {
            $customer = new Customer();
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->phone = $request->input('phone');
            $customer->address = $request->input('address');
            $customer->describe  = $request->input('describe');
            $customer->region  = $request->input('region');
            $customer->gender  = $request->input('gender');
            $customer->id_group = $request->input('group');
            $customer->id_status = 1;
            $customer->save();

            $user__customer = new User_Customer();
            $user__customer->id_user = $request->input('user');
            $user__customer->id_customer = $customer->id;
            $user__customer->save();

            $group = Group::find($customer->id_group);
            $status = Status::find($customer->id_status);
            $user = User::select('users.name')->where('id',$user__customer->id_user)->first();

            return response()->json([
                'status' => 200,
                'message' => 'Thêm thành công',
                'customer' => $customer,
                'group' => $group,
                'status' => $status,
                'user' => $user,
            ]);
        }
    }

    public function detailCustomer($id)
    {
        $customer = Customer::find($id);
        $user__customer = User_Customer::where('id_customer',$id)->first();

        if($customer) {
            return response()->json([
                'status'=>200,
                'customer'=> $customer,
                'user__customer'=> $user__customer,
            ]);
        } else {
            return response()->json([
                'status'=>404,
                'message'=>'Không tìm thấy',
            ]);
        }
    }

    public function updateCustomer(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required|unique:customers,phone,'.$id,
        ], [
            'name.required' => 'Yêu cầu nhập Tên khách hàng',
            'phone.required' => 'Yêu cầu nhập Số điện thoại',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        } else {
            $customer = Customer::find($id);
            if($customer) {
                $customer->name = $request->input('name');
                $customer->email = $request->input('email');
                $customer->phone = $request->input('phone');
                $customer->address = $request->input('address');
                $customer->describe  = $request->input('describe');
                $customer->gender  = $request->input('gender');
                $customer->region  = $request->input('region');
                $customer->id_group = $request->input('group');
                $customer->id_status = $request->input('status');
                $customer->update();

                $user__customer = User_Customer::where('id_customer',$id)->first();
                $user__customer->id_user = $request->input('user');
                $user__customer->update();

                $group = Group::find($customer->id_group);
                $status = Status::find($customer->id_status);
                $user = User::select('users.name')->where('id',$user__customer->id_user)->first();

                return response()->json([
                    'status'=>200,
                    'message'=>'Cập nhật thành công',
                    'customer'=> $customer,
                    'group'=> $group,
                    'status'=> $status,
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

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Xóa thành công',
        ]);
    }
}
