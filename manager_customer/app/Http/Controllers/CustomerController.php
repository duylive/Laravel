<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.list', compact('customers'));
    }

    public function create(){
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request){
        $customer = new Customer();
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->city_id  = $request->input('city_id');
        $customer->save();

        //tao moi xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }

    public function edit($id){
        $customer = Customer::findOrFail($id);
        $cities = City::all();

        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id){
        $customer = Customer::findOrFail($id);
        $customer->name     = $request->input('name');
        $customer->email    = $request->input('email');
        $customer->dob      = $request->input('dob');
        $customer->city_id  = $request->input('city_id');
        $customer->save();

        //dung session de dua ra thong bao
        Session::flash('success', 'Cập nhật khách hàng thành công');

        //cap nhat xong quay ve trang danh sach khach hang
        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        Session::flash('success', 'Xóa khách hàng thành công');

        return redirect()->route('index');
    }
}
