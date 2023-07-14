<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\DB;
class Admin extends Controller
{
    public function s(Request $request)
    {

        $searchmodel = $request->searchmodel;
        $searchyear = $request->searchyear;
        $searchplateid = $request->searchplateid;
        $searchcolor = $request->searchcolor;
        $searchprice = $request->searchprice;
        $searchstatus = $request->searchstatus;



        $ssn =$request->ssn;
        $cname =$request->cname;
        $email=$request->email;
        $gender=$request->gender;
        $phone=$request->phone;
        $address=$request->address;
        $cdnumber=$request->cdnumber;
        $lnumber=$request->lnumber;
        $resday = $request->resdaydate;
        $respayment = $request->respayment;
        if( $searchmodel)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.model' , 'LIKE' , '%'.$searchmodel.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);

        }
        else if($searchyear)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.year' , 'LIKE' , '%'.$searchyear.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($searchplateid)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.plate_id' , 'LIKE' , $searchplateid)
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);

        }
        else if($searchcolor)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.color' , 'LIKE' , '%'.$searchcolor.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($searchprice)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.price' , 'LIKE' , $searchprice)
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($searchstatus)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('car.status' , 'LIKE' , '%'.$searchstatus.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($ssn)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.SSN' , 'LIKE' , $ssn)
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }

        else if($cname)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.SSN' , 'LIKE' , '%'.$cname.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($email)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.email' , 'LIKE' , '%'.$email.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($gender)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.gender' , 'LIKE' , '%'.$gender.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($phone)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.phone' , 'LIKE' , '%'.$phone.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($address)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.address' , 'LIKE' , '%'.$address.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($cdnumber)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.credit_number' , 'LIKE' ,$cdnumber)
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($lnumber)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('customer.licesne_no' , 'LIKE' , $lnumber)
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($resday)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('reservation.created_at' , 'LIKE' , '%'.$resday.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }
        else if($respayment)
        {
            $cars = DB::table('car')->select('car.*','reservation.*','customer.*')
                ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->where('reservation.updated_at' , 'LIKE' , '%'.$resday.'%')
                ->get();
            $result = json_decode($cars, true);
            return view('apage',['result' => $result]);
        }

    }
    function newcar(Request $request)
    {
        $this->validate ($request , [ 'model' => 'required',
            'plate_id' => 'required',
            'country'=>'required',
            'price' => 'required',
            'status' => 'required']);
        $car = new Car ;
        $car->model=$request->model ;
        $car->year=$request->year;
        $car->plate_id=$request->plate_id;
        $car->color=$request->color;
        $car->price=$request->price;
        $car->country=$request->country;
        $car->status=$request->status;
        $car->save();
        session()->put(['msg'=>'Car has been added successfully']);
        return redirect('admincar');

    }
    function updatecar(Request $request)
    {
        $this->validate ($request , [ 'plate_id' => 'required',
            'status' => 'required']);
        $plate_id= $request->plate_id;
        Car::where('plate_id' , 'LIKE' , $plate_id)->update(['status'=>$request->status]);
        session()->put(['msgs'=>'Car has been updated']);
        return redirect('updatecar');

    }
}
