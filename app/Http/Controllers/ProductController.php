<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        try {
            if ($request->id == 'DashCam') {
                $data = Product::where('type', 'Dash Cam')->get();
                $type = "Dash Cam";
            } else if ($request->id == 'SmartBoard') {
                $data = Product::where('type', 'Smart Board')->get();
                $type = "Smart Board";
            } else if ($request->id == 'EvCharger') {
                $data = Product::where('type', 'EV Charger')->get();
                $type = "EV Charger";
            } else if ($request->id == 'LaptopPB') {
                $data = Product::where('type', 'Laptop Power Bank')->get();
                $type = "Laptop Power Bank";
            } else if ($request->id == 'DongleAcc') {
                $data = Product::where('type', 'Dongle And Accessories')->get();
                $type = "Dongle And Accessories";
            } else {
                $data = Product::get();
                $type = "-";
            }

            return view('product_detail', [
                'products' => $data,
                'type' => $type
            ]);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function detail($id)
    {
        try {
            return view('product_detail', ['product'=> Product::where('id', $id)->first()]);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function index()
    {
        try {
            return view('admin.product', ['products'=> Product::get()]);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'product_name' => 'required|max:255',
                'description' => 'required|max:255',
                'type' => 'required|max:255',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8048'
            ]);

            $photoPath = null;

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $destinationPath = public_path('assets/images/attached-photo');
                $extension = $request->file('photo')->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension; 
                $request->file('photo')->move($destinationPath, $fileName);
                $photoPath = 'assets/images/attached-photo/' . $fileName; 
                
            }

            Product::create([
                'product_name' => $request->product_name,
                'description' => $request->description,
                'type' => $request->type,
                'photo' => $photoPath,
                'created_by' => Auth::user()->id
            ]);

            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product data successfully added!']);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'product_name' => 'required|max:255',
                'description' => 'required|max:255',
                'type' => 'required|max:255',
            ]);

            $oldData = Product::where('id', $request->id)->first();
            
            $photoPath = $oldData->photo;

            if ($request->hasFile('photo') && $request->file('photo')->isValid()) {
                $destinationPath = public_path('assets/images/attached-photo');
                $extension = $request->file('photo')->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension; 
                $request->file('photo')->move($destinationPath, $fileName);
                $photoPath = 'assets/images/attached-photo/' . $fileName; 
                
            }

            Product::where('id', $request->id)->update([
                'product_name' => $request->product_name,
                'description' => $request->description,
                'type' => $request->type,
                'photo' => $photoPath,
                'updated_by' => Auth::user()->id
            ]);

            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product data successfully updated!']);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function delete(Request $request) {
        try {
            $oldData = Product::where('id', $request->id_product)->first();
            if (!empty($oldData)) {
                if (File::exists($oldData->photo)) {
                    File::delete($oldData->photo);
                }
                Product::where('id', $request->id_product)->delete();
            }
            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product data successfully deleted!']);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }
}
