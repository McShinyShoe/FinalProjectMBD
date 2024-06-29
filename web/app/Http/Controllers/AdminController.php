<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Items;
use App\Models\Orders;
use App\Models\Payments;
use App\Models\ServicePrices;
use App\Models\Services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function insert_customers()
    {
        return view('admin.insert.customers');
    }
    public function insert_customers_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        $customerData = [
            'Customers_Name' => $request->name,
            'Customers_EMail' => $request->email,
            'Customers_PhoneNumber' => $request->phone,
            'Customers_Address' => $request->address,
        ];
        $customer = Customers::create($customerData);

        if(!$customer) {
            return redirect(route('insert.customers'))->with("error", "insert failed");
        }

        return redirect()->route('insert.customers')->with("success", "Created customer with id " . $customer['Customers_ID']);
        // return view('admin.insert.customers', compact('customers', 'orders'));
        
    }
    public function insert_items()
    {
        return view('admin.insert.items');
    }
    public function insert_items_post(Request $request)
    {
        $request->validate([
            'unit' => 'required',
            'services_id' => 'required',
            'orders_id' => 'required',
        ]);
        $itemData = [
            'Items_Unit' => $request->unit,
            'Items_Services_ID' => $request->services_id,
            'Items_Orders_ID' => $request->orders_id,
        ];
        $item = Items::create($itemData);

        if(!$item) {
            return redirect(route('insert.items'))->with("error", "insert failed");
        }

        return redirect()->route('insert.items')->with("success", "Created item with id " . $item['Items_ID']);
        // return view('admin.insert.customers', compact('customers', 'orders'));
        
    }
    public function insert_orders()
    {
        return view('admin.insert.orders');
    }
    public function insert_orders_post(Request $request)
    {
        $request->validate([
            'days' => 'required',
            'startdate' => 'required',
            'customers_id' => 'required',
        ]);
        $orderData = [
            'Orders_Days' => $request->days,
            'Orders_StartDate' => $request->startdate,
            'Orders_Customers_ID' => $request->customers_id,
        ];
        $order = Orders::create($orderData);

        if(!$order) {
            return redirect(route('register'))->with("error", "insert failed");
        }

        return redirect()->route('insert.orders')->with("success", "Created order with id " . $order['Orders_ID']);
        // return view('admin.insert.customers', compact('customers', 'orders'));
        
    }
    public function insert_payments()
    {
        return view('admin.insert.payments');
    }
    public function insert_payments_post(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'orders_id' => 'required',
        ]);
        $paymentData = [
            'Payments_Amount' => $request->amount,
            'Orders_Orders_ID' => $request->orders_id,
        ];
        $payment = Payments::create($paymentData);

        if(!$payment) {
            return redirect(route('insert.payments'))->with("error", "insert failed");
        }

        return redirect()->route('insert.payments')->with("success", "Created payment with id " . $payment['Payments_ID']);
        
    }
    public function insert_serviceprices()
    {
        return view('admin.insert.serviceprices');
    }
    public function insert_serviceprices_post(Request $request)
    {
        $request->validate([
            'service_id' => 'required',
            'days' => 'required',
            'priceperunit' => 'required',
        ]);
        $servicepricesData = [
            'ServicePrices_Services_ID' => $request->service_id,
            'ServicePrices_Days' => $request->days,
            'ServicePrices_PricePerUnit' => $request->priceperunit,
        ];
        $serviceprices = ServicePrices::create($servicepricesData);

        if(!$serviceprices) {
            return redirect(route('insert.customers'))->with("error", "insert failed");
        }
        return redirect()->route('insert.customers')->with("success", "Created ServicePrice with id " . $serviceprices['ServicePrices_ID'] . ", " . $serviceprices['ServicePrices_Days']);
        // return view('admin.insert.customers', compact('customers', 'orders'));
        
    }
    public function insert_services()
    {
        return view('admin.insert.services');
    }
    public function insert_services_post(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'unittype' => 'required',
        ]);
        $customerservicesData = [
            'Services_Name' => $request->name,
            'Services_UnitType' => $request->unittype,
        ];
        $services = Services::create($customerservicesData);

        if(!$services) {
            return redirect(route('insert.services'))->with("error", "insert failed");
        }

        return redirect()->route('insert.services')->with("success", "Created service with id " . $services['Services_ID']);
        // return view('admin.insert.customers', compact('customers', 'orders'));
        
    }
}
