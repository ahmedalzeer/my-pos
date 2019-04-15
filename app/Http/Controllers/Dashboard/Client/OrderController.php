<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Category;
use App\Client;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {

    }//end of index

    public function create(Client $client)
    {
        $categories = Category::with('products')->get();
        return view('dashboard.clients.orders.create', compact( 'client', 'categories'));

    }//end of create

    public function store(Request $request, Client $client)
    {

    }//end of store

    public function edit(Client $client, Order $order)
    {

    }//end of edit

    public function update(Request $request, Client $client, Order $order)
    {

    }//end of update

    public function destroy(Client $client, Order $order)
    {

    }//end of destroy

}//end of controller
