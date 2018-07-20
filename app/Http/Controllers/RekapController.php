<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rekap;
use App\kelas;
use App\absensisiswas;
class RekapController extends Controller
{
    public function index()
    {
    	$kelas = kelas::all();
    	$absensisiswas = absensisiswas::all();
    	return view('rekap.index',compact('absensisiswas','kelas'));
    }

    public function index2(Request $request)
    {
    	$a = $request->a;
    	$b = $request->b;
    	$kelas = $request->c;
    	$absensisiswas = absensisiswas::whereBetween('created_at',[$a,$b])->where('id_kelas','=',$kelas)->get();
    	return view('rekap.index2',compact('absensisiswas','a','b','kelas'));
    	
    }
}