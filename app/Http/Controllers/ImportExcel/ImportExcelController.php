<?php

namespace App\Http\Controllers\ImportExcel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImportExcelController extends Controller
{
    public function index()
    {
        $product = Products::orderBy('created_at','DESC')->get();
        return view('import_excel.index',compact('product'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new ImportProducts, request()->file('import_file'));
        return back()->with('success', 'Product imported successfully.');
    }
}
