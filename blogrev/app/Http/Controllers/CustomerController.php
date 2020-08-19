<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create(){
        return view('customer/create');
    }
    public function store(Request $request){
        $customers=new Customer([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ]);
        $customers->save();
        return redirect('/');
    }
    public function index(){
        $customers=Customer::all();
        return view('customer/index',compact('customers'));
    }
    public function detail($id){
          $customers=Customer::find($id);
          return view('customer/detail',compact('customers'));
    }
    public function edit($id){
        $customers=Customer::find($id);
        return view('customer/edit',compact('customers'));
    }
    public function update(Request $request){
        $customers=[
            'name'=>$request->get('name'),
        'email'=>$request->get('email'),
            'password'=>$request->get('password')
        ];
Customer::find($r)
    }


}
