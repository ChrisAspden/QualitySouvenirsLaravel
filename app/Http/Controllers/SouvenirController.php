<?php

namespace App\Http\Controllers;

use App\Category;
use App\Customer;
use App\Order;
use App\OrderItem;
use App\Souvenir;


class SouvenirController extends Controller
{
    public function index()
    {
        $souvenirs = Souvenir::all();
        return view('Souvenirs.index', compact('souvenirs'));
    }

    public function CatIndex()
    {
        $categories = Category::all();
        return view('Categories.index', compact('categories'));
    }



    public function CategorySelect(){

        $categories = Category::all();
        return view('Souvenirs.CategorySelect', compact('categories'));

    }

    public function CategoryView($id)
    {
        switch($id)
        {
            case 1:
                $souvenir = Souvenir::where('category_id', 1)
                    ->orderBy('id', 'asc')
                    ->simplePaginate(3);



                return view('Souvenirs.CategoryView', compact('souvenir'));
                break;

            case 2:
                $souvenir = Souvenir::where('category_id', 2)
                    ->orderBy('id', 'asc')
                    ->simplePaginate(3);


                return view('Souvenirs.CategoryView', compact('souvenir'));
                break;

            case 3:
                $souvenir = Souvenir::where('category_id', 3)
                    ->orderBy('id', 'asc')
                    ->simplePaginate(3);


                return view('Souvenirs.CategoryView', compact('souvenir'));
                break;
        }

        $souvenir = Souvenir::all();
        return view('Souvenirs.CategoryView', compact('souvenir'));

    }

    public function ProductView($id)
    {
        $souvenir = Souvenir::whereid($id)->first();
        return view('Souvenirs.ProductView', compact('souvenir'));
    }

    public function ShoppingCart($id)
    {
        $data = [];

        if($id==0)
        {
            $SouvenirsInCart = Souvenir::where('IsInCart', true)
                ->orderBy('id', 'asc')
                ->get();

            $data['SouvenirsInCart']=$SouvenirsInCart;

            $OrderTotal = 0;


            foreach ($SouvenirsInCart as $s)
            {
                $OrderTotal += $s->ItemPrice;
            }



            $data['OrderTotal'] = $OrderTotal;
            $GrandTotal = $OrderTotal * 1.15;
            $data['GrandTotal'] = $GrandTotal;



            return view('Souvenirs.ShoppingCart', $data);
        }
        else
        {
            $souvenir = Souvenir::whereid($id)->first();
            $souvenir->IsInCart=true;
            $souvenir->save();

            $SouvenirsInCart = Souvenir::where('IsInCart', true)
                ->orderBy('id', 'asc')
                ->get();

            $data['SouvenirsInCart']=$SouvenirsInCart;

            $OrderTotal = 0;

            foreach ($SouvenirsInCart as $s)
            {
                $OrderTotal += $s->ItemPrice;
            }

            $data['OrderTotal'] = $OrderTotal;
            $GrandTotal = $OrderTotal * 1.15;
            $data['GrandTotal'] = $GrandTotal;


            return view('Souvenirs.ShoppingCart', $data);
        }

    }

    public function ClearCart()
    {
        $data = [];
        $OrderTotal = 0;

        $SouvenirsInCart = Souvenir::where('IsInCart', true)
            ->orderBy('id', 'asc')
            ->get();

        foreach ($SouvenirsInCart as $s)
        {
            $s->IsInCart=false;
            $s->Quantity=1;
            $s->save();
        }

        $data['SouvenirsInCart']=$SouvenirsInCart;
        $data['OrderTotal'] = $OrderTotal;
        $GrandTotal = $OrderTotal * 1.15;
        $data['GrandTotal'] = $GrandTotal;

        return view('Souvenirs.ShoppingCart', $data);

    }

    public function Checkout()
    {
        $data = [];

        $SignedInCust = Customer::where('IsSignedIn',true)->first();

        if($SignedInCust == null)
        {
            return view('Customers.Login');
        }

        $customerFirstMidName = $SignedInCust->FirstMidName;
        $customerLastName = $SignedInCust->LastName;
        $customerMobile = $SignedInCust->MobilePhoneNumber;
        $customerEmail = $SignedInCust->Email;

        $data['customerFirstMidName'] = $customerFirstMidName;
        $data['customerLastName'] = $customerLastName;
        $data['customerMobile'] = $customerMobile;
        $data['customerEmail'] = $customerEmail;

        $order = new Order();

        $SouvenirsInCart = Souvenir::where('IsInCart', true)
            ->orderBy('id', 'asc')
            ->get();

        $OrderTotal = 0;

        foreach ($SouvenirsInCart as $s)
        {
            $OrderTotal += $s->ItemPrice;
        }


        $order->Customer_ID = $SignedInCust->id;
        $order->OrderStatus ='waiting';
        $order->SubTotal = $OrderTotal;
        $order->GrandTotal = round($OrderTotal*1.15);
        $order->Date = new \DateTime('now');
        $order->Save();

        foreach($SouvenirsInCart as $s)
        {
            $orderItem = new OrderItem();
            $orderItem->Order_ID = $order->id;
            $orderItem->Souvenir_ID = $s->id;
            $orderItem->Price = $s->ItemPrice;
            $orderItem->Quantity = 1;
            $orderItem->TotalCost = round($s->ItemPrice*1.15);
            $orderItem->save();
        }


        $controller = new SouvenirController();
        $controller->ClearCart();

        return View('Customers/MyAccount', $data);
    }


}

