<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public static function show_res_dates(Request $request)
    {
        $from = $request->startdate;
        $to = $request->enddate;
        $cars= DB::table('car')->select('car.*','reservation.*','customer.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')->whereBetween('created_at',[$from,$to])->get();
        $result = json_decode($cars, true);
        return view('showfirstreport',['result' => $result]);

    }
    public static function show_car_dates(Request $request)
    {
        $request->validate (['car_id' => 'required']);
        $from = $request->startdate;
        $to=$request->enddate;
        $car_id=$request->car_id;

        $cars= DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereBetween('created_at',[$from,$to])
            ->where('Car_ID','LIKE',$car_id)->get();
        $result = json_decode($cars, true);
        return view('showsecondreport',['result' => $result]);

    }
    public static function show_cust_dates(Request $request)
    {
        $request->validate (['SSN' => 'required']);
        $SSN = $request->SSN;

        $cars = DB::table('car')->select('car.plate_id','car.model','customer.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->join('customer', 'reservation.C_SSN', '=', 'customer.SSN')
            ->where('customer.SSN' , 'LIKE' , $SSN)
            ->get();
        $result = json_decode($cars, true);
        return view('creservereport',['result' => $result]);
    }
    public static function show_payment_dates(Request $request)
    {
        $from = $request->startdate;
        $to = $request->enddate;
        $result = Reservation::whereBetween('updated_at',[$from,$to])->where('paid','LIKE','true')->get();

        return view('paymentreport',['result' => $result]);
    }
}
