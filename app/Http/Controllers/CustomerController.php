<?php

namespace App\Http\Controllers;

use Algolia\AlgoliaSearch\Exceptions\NotFoundException;
use App\Administrator;
use App\Customer;
use App\Order;
use App\OrderItem;
use App\Souvenir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \Validator;

class CustomerController extends Controller
{
    public function Create()
    {
        return view('Customers.Create');
    }

    public function CreatePost(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'FirstMidName' => 'required|max:50',
            'LastName' => 'required|max:50',
            'MobilePhoneNumber' => 'required|max:50',
            'Email' => 'required|max:50',
            'Password' => 'required|max:50',
        ]);
        if($validator->fails()){

            return redirect('Customers/Create')
                ->withErrors($validator)
                ->withInput();


        }



        $customer = new Customer([

            'FirstMidName' => $_POST['FirstMidName'],
            'LastName' => $_POST['LastName'],
            'HomePhoneNumber' => $_POST['HomePhoneNumber'],
            'WorkPhoneNumber' => $_POST['WorkPhoneNumber'],
            'MobilePhoneNumber' => $_POST['MobilePhoneNumber'],
            'Address' => $_POST['Address'],
            'Email' => $_POST['Email'],
            'Password' => $_POST['Password'],


        ]);

        $customer->IsSignedIn=false;
        $customer->Enabled=true;

        $customer ->save();

        return redirect('Customers/ConfirmRegister');
    }

    public function Login()
    {
        return view('Customers.Login');
    }

    public function Logout()
    {

        $SignedInCust = Customer::where('IsSignedIn',true)->first();

        if($SignedInCust == null)
        {
            return view('Home.Index');
        }

        $SignedInCust->IsSignedIn=false;
        $SignedInCust->Save();

        return view('Customers.Logout');
    }

    public function LoginPost()
    {

        $data = [];

        $email = Input::get('email');
        $password = Input::get('password');


        $customer = Customer::whereEmail($email)->first();

        if($customer != null)
        {
            if($customer->Enabled==false)
            {
                return view('Customers/AccountDisabled');
            }

            elseif($customer->Password==$password)
            {
                $customer->IsSignedIn=true;
                $customer->save();

                $customerFirstMidName = $customer->FirstMidName;
                $customerLastName = $customer->LastName;
                $customerMobile = $customer->MobilePhoneNumber;
                $customerEmail = $customer->Email;

                $data['customerFirstMidName'] = $customerFirstMidName;
                $data['customerLastName'] = $customerLastName;
                $data['customerMobile'] = $customerMobile;
                $data['customerEmail'] = $customerEmail;

                $CustomerOrders = Order::where('Customer_ID', $customer->id)
                    ->orderBy('id', 'asc')
                    ->get();
                $data['CustomerOrders'] = $CustomerOrders;


                return view('Customers/MyAccount', $data);
            }
        }
        else {

            return view('Customers/LoginFail');
        }


    }

    public function MyAccount()
    {
        $data = [];

        $SignedInCust = Customer::where('IsSignedIn',true)->first();

        if($SignedInCust == null)
        {
            return view('Customers.Login');
        }

        $CustomerOrders = Order::where('Customer_ID', $SignedInCust->id)
            ->orderBy('id', 'asc')
            ->get();

        $customerFirstMidName = $SignedInCust->FirstMidName;
        $customerLastName = $SignedInCust->LastName;
        $customerMobile = $SignedInCust->MobilePhoneNumber;
        $customerEmail = $SignedInCust->Email;

        $data['customerFirstMidName'] = $customerFirstMidName;
        $data['customerLastName'] = $customerLastName;
        $data['customerMobile'] = $customerMobile;
        $data['customerEmail'] = $customerEmail;
        $data['CustomerOrders'] = $CustomerOrders;

        return view('Customers.MyAccount', $data);

    }

    public function LoginFail()
    {
        return view('Customers.LoginFail');
    }

    public function OrderDetails($id)
    {
        $data = [];

        $ItemsInOrder = OrderItem::where('Order_ID', $id)
            ->orderBy('id', 'asc')
            ->get();


        $data['ItemsInOrder'] = $ItemsInOrder;


        return view('Customers.OrderDetails', $data);
    }

    public function AdminLogin()
    {
        return view('Administrator/Login');
    }

    public function AdminLoginPost()
    {
        $UserName = Input::get('AdminLoginName');
        $Password = Input::get('AdminPassword');

        $Administrator = Administrator::whereadminloginname($UserName)->first();

        if($Administrator !=null)
        {
            if($Administrator->AdminPassword == $Password)
            {
                return View('Administrator/AdminPage');
            }
        }
        else
        {
            return view('Customers/LoginFail');
        }

    }

}
