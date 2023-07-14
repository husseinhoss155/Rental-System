<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Auth;
use App\Customer;
use DB;
use App\Car;
use App\Quotation;
use Illuminate\support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function CheckLogin(Request $request)
    {
        $this->validate($request, ['Email' => 'required|email',
            'Password' => 'required|min:8']);

        $user_Custmer = Customer::where('Email', $request->get('Email'))->where('Password', md5($request->get('Password')))->get();
        if (!$user_Custmer->isempty()) {
            $user = $user_Custmer[0];
            session()->put(['user'=>$user]);
            $cars = Car::all();
            $customers = Customer::all();
            if ($user->type == 1) {
                return view('/adminpage',['customers'=>$customers,'admin'=>$user]);
                //adminstor view
            } else {
                return view('userpage',['user'=>$user,'cars'=>$cars]);
                // name of the view of the reservation for customer
            }
        }
        else{

           return Redirect::back()->withErrors('Email or password is incorrect');;
        }

    }
    public function Logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
