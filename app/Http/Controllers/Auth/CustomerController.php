<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Car;
use App\Reservation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\PseudoTypes\NonEmptyLowercaseString;
use Psy\Util\Str;
use DateTime;

class CustomerController extends Controller
{
    public function newcustomer(Request $request)
    {
        $this->validate ($request , [ 'Name' => 'required',
        'Email' => 'required|email',
        'Password' => 'required|min:8',
        'phone'=>'required|min:11']);
        $customer = new Customer ;
        $customer->Name=$request->Name ;
        $customer->Email=$request->Email;
        $customer->Password=md5($request->Password);
        $customer->phone=$request->phone;
        $customer->gender=$request->gender;
        $customer->address=$request->address;
        $customer->credit_number=$request->credit_number;
        $customer->licesne_no=$request->licesne_no;
        $customer->type=2;

        $customer->save();
        return redirect()->route('loginpage');

    }
    public function searchby(Request $request)
    {
        $user = session()->get('user');
        $searchmodel = $request->searchmodel;
        $searchyear = $request->searchyear;
        $searchplateid = $request->searchplateid;
        $searchcolor = $request->searchcolor;
        $searchprice = $request->searchprice;
        $searchstatus = $request->searchstatus;
        $selectedcountry = $request->selectcountry;
        if ($selectedcountry != 'all') {
            if ($searchmodel) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('model', 'LIKE', '%' . $searchmodel . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchyear) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('year', 'LIKE', '%' . $searchyear . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchplateid) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('plate_id', 'LIKE', $searchplateid)->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchcolor) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('color', 'LIKE', '%' . $searchcolor . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchprice) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('price', 'LIKE', $searchprice)->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchstatus) {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->where('status', 'LIKE','%'. $searchstatus.'%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } else {
                $cars = Car::where('country', 'LIKE', '%' . $selectedcountry . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            }
        }
        else{
            if ($searchmodel) {
                $cars = Car::where('model', 'LIKE', '%' . $searchmodel . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchyear) {
                $cars = Car::where('year', 'LIKE', '%' . $searchyear . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchplateid) {
                $cars = Car::where('plate_id', 'LIKE', $searchplateid)->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchcolor) {
                $cars = Car::where('color', 'LIKE', '%' . $searchcolor . '%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchprice) {
                $cars = Car::where('price', 'LIKE', $searchprice)->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            } elseif ($searchstatus) {
                $cars = Car::where('status', 'LIKE','%'. $searchstatus.'%')->get();
                return view('userpage',['user'=>$user,'cars'=>$cars]);
            }
            else{
                return $this->reset();
            }
        }
    }
    public function reset(){
        $cars = Car::all();
        $user = session()->get('user');
        return view('userpage',['user'=>$user,'cars'=>$cars]);
    }


    public function reserveview($Car_ID,$SSN){
        $reservation = Reservation::where('Car_ID','LIKE',$Car_ID)->get();
        if(!$reservation->isempty()) return redirect('reservation')->withErrors('The car is already reserved');
        session()->put(['plate_id'=>$Car_ID,'userssn'=>$SSN]);
        return \redirect('reservation');
    }

    public function showCarDetails(){
        $Car_ID=session()->get('plate_id');
        $selectedcar = Car::where('plate_id' , 'LIKE' , $Car_ID)->first();
        return view('cardetails',['car'=>$selectedcar]);
    }

    public function reserve(){
        $totalprice=session()->get('totalprice');
        $pickupdate = session()->get('pickupdate');
        $returndate = session()->get('returndate');
        $Car_ID=session()->get('plate_id');
        $SSN=session()->get('userssn');
        $reservation = Reservation::where('Car_ID','LIKE',$Car_ID)->get();
        if(!$reservation->isempty()) return Redirect::to('reservedone')->withErrors('The car is already reserved');
        $selectedcar = Car::where('plate_id' , 'LIKE' , $Car_ID)->first();
        $customer = Customer::where('SSN','LIKE',$SSN)->first();
        $res = new Reservation;
        $res->C_SSN = $customer->SSN;
        $res->Car_ID = $selectedcar->plate_id;
        $res->bill = $totalprice;
        $res->pickupdate = $pickupdate;
        $res->returndate = $returndate;
        $randomNumber=mt_rand(100000,999999);
        if(!Reservation::where('res_id','=',$randomNumber)->exists())
            $res->res_id=$randomNumber;
        $res->save();
        return Redirect::to('reservedone')->withErrors('Reservation is done');
    }


    public function viewOutput(){
    $totalprice = session()->get('totalprice');
    return view('output',['totalprice'=>$totalprice]);
    }
    public function calculatePrice(Request $request){
        $Car_ID=session()->get('plate_id');
        $selectedcar = Car::where('plate_id' , 'LIKE' , $Car_ID)->first();
        $pickupdate = $request->pickup;
        $returndate = $request->return;
        $datetime1 = new DateTime($pickupdate);
        $datetime2 = new DateTime($returndate);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        $totalprice = $days * $selectedcar->price;
        session()->put(['totalprice'=>$totalprice,'pickupdate'=>$pickupdate,'returndate'=>$returndate]);
        return redirect()->route('viewoutput');

    }


    public function showReservations($SSN){
        $reservations = Reservation::where('C_SSN','LIKE',$SSN)->get();
        return view('showreservations',['reservations'=>$reservations]);
    }

    public function pay($plate_id,$SSN){
        Reservation::where('Car_ID',$plate_id)->where('C_SSN',$SSN)->update(['paid'=>'true']);
        return \redirect('paymentsuccess');
    }
    public static function show_car_status(Request $request)
    {
        $date = $request->date;

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','<',$date)
            ->whereDate('returndate','>',$date)
            ->where('status','LIKE','%active%')
            ->update(['status'=>'active,reserved']);

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','<',$date)
            ->whereDate('returndate','>',$date)
            ->where('status','LIKE','%out of service%')
            ->update(['status'=>'out of service,reserved']);

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','>',$date)
            ->whereDate('returndate','>',$date)
            ->where('status','LIKE','%active%')
            ->update(['status'=>'active,unreserved']);

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','<',$date)
            ->whereDate('returndate','<',$date)
            ->where('status','LIKE','%active%')
            ->update(['status'=>'active,unreserved']);

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','>',$date)
            ->whereDate('returndate','>',$date)
            ->where('status','LIKE','%out of service%')
            ->update(['status'=>'out of service,unreserved']);

        DB::table('car')->select('car.*','reservation.*')
            ->join('reservation', 'car.plate_id', '=', 'reservation.Car_ID')
            ->whereDate('pickupdate','<',$date)
            ->whereDate('returndate','<',$date)
            ->where('status','LIKE','%out of service%')
            ->update(['status'=>'out of service,unreserved']);

        $cars = DB::table('car')->get();

        $result = json_decode($cars, true);
        return view('carstatusshow',['result' => $result]);


    }


}
