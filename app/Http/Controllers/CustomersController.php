<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostCustomer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class CustomersController extends Controller
{
    //
    function show(Request $request){
       $customers = DB::table('post_customers')->get();

       return View::make('list')->with('list', $customers);
    }


    function edit($id) : mixed{
        $row = DB::table('post_customers')->get($id);

        return  View::make('edit')->with('edit', $row);
    }






}
