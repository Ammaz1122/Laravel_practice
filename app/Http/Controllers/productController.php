<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addData(Request $request){


        $data = $request->validate([
            'name'=>['required','min:3','max:50'],
            'auctual_price'=>['required','integer','min:100','max:500000'],
            'discount_price'=>['required','integer','min:100','max:500000'],
            'description'=>['required','min:5','max:50'],
            'image'=>['required','mimes:jpg,png,jpeg']
        ]);

        // Store Images Publically

        $data['image'] = $request->file('image')->store('ProductImages','public');

        // Sends data to the backend by using Models
        Products::create($data);

            return back();
    }
    public function getData(){
        $data = Products::all();
        return view('welcome',compact('data'));
    
    }
}
