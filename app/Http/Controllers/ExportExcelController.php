<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
class ExportExcelController extends Controller
{
    function index()
    {
        return view('absensisiswa');
    }

    public function contactExport(){
        $contact = contact::select('nama','kelas','tanggal','keterangan')->get();
        return Excel::create('data_contact', function($excel) use ($contact){
            $excel->sheet('mysheet', function($sheet) use ($contact){
                $sheet->fromArray($contact);
            });
        })->download('xls');
    }
}
