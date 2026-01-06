<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Certificate;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class CertificateController extends Controller
{
    public function index()
    {
        try {
            return view('admin.certificate', ['certificate'=> Certificate::get()]);
        } catch (Exception $err) {
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'collection_name' => 'required|max:255',
                'serial_number' => 'required|max:255',
                'qr_code_number' => 'required|max:255',
            ]);

            Certificate::create([
                'collection_name' => $request->collection_name,
                'serial_number' => $request->serial_number,
                'qr_code_number' => $request->qr_code_number,
                'created_by' => Auth::user()->id
            ]);

            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product Certificate successfully added!']);
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'collection_name' => 'required|max:255',
                'serial_number' => 'required|max:255',
                'qr_code_number' => 'required|max:255',
            ]);

            Certificate::where('id', $request->id)->update([
                'collection_name' => $request->collection_name,
                'serial_number' => $request->serial_number,
                'qr_code_number' => $request->qr_code_number,
                'updated_by' => Auth::user()->id
            ]);

            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product Certificate successfully updated!']);
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function delete(Request $request) {
        try {
            $oldData = Certificate::where('id', $request->id)->first();
            if (!empty($oldData)) {
                Certificate::where('id', $request->id)->delete();
            }
            return redirect()->back()->with(['status' =>  'success', 'message' => 'Product Certificate successfully deleted!']);
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function get_qr($id)
    {
        try {
            $certificate = Certificate::where('id', $id)->first();
            dd(url()->current());
            $url = url()->current() . '/' . $certificate->serial_number . '/' . $certificate->qr_code_number;
            
            $qr = QrCode::format('svg')
                ->size(300)
                ->generate($url);

            $svg = (string) $qr;
            $data = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $svg);
                
            return response($data)->header('Content-Type', 'image/svg+xml');
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }

    public function view_certificate($id, $sn, $qr)
    {
        try {
            return view('admin.fileCertificate', ['certificate'=> Certificate::where('id', $id)->first()]);
        } catch (Exception $err) {
            dd($err);
            return redirect()->back()->with('err_message', 'Error Message: '. $err->getMessage());
        }
    }
}
