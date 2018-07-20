<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\absensisiswas;
use App\absensigurus;
class ExcelController extends Controller
{
    //
    public function date($jenis,Request $request)
    {
    	if($request->start != null && $request->end != null){
    		if($jenis == 'inout'){
	    		$start = $request->start;
	    		$end = $request->end;
	    		$judul = 'in-out data'.$start.'to'.$end;
	    		$data = inout::whereBetween('created_at',[$this->convert($start),$this->convert($end)])->get();
	    		return $this->export($jenis,$judul,$start,$end,$data);
	    	}else if($jenis == 'absensisiswas'){
	    		$start = $request->start;
	    		$end = $request->end;
	    		$judul = 'Export Absensi Siswa'.$start.'to'.$end;
	    		$data = fitrah::whereBetween('created_at',[$this->convert($start),$this->convert($end)])->get();
	    		return $this->export($jenis,$judul,$start,$end,$data);
	    	}elseif ($jenis == 'absensigurus') {
	    		$start = $request->start;
	    		$end = $request->end;
	    		$judul = 'Export Absensi Guru'.$start.'to'.$end;
	    		$data = mal::whereBetween('created_at',[$this->convert($start),$this->convert($end)])->get();
	    		return $this->export($jenis,$judul,$start,$end,$data);
	    		return $this->export($jenis,$judul,$start,$end,$data);
	    	}else{
	    		return redirect()->back();
	    	}
    	}else{
			Session::flash("notif",[
			   "level"=>"error",
			   "title"=>"Gagal",
			   "message"=>"Tanggal Harus dipilih terlebih dahulu"
			]);
		 	return redirect()->back();
		}

    }

    public function count($jenis)
    {
    	$data = count::where('jenis',$jenis);
    	return $data;
    }
    public function share($jenis)
    {
    	$data = share::where('jenis',$jenis);
    	return $data;
    }
    public function all($jenis)
    {
		if($jenis == 'inout'){
    		$judul = 'in out data';
    		$data  = inout::all(); 
    		return $this->exportall($judul,$jenis,$data);
    	}else if($jenis == 'absensisiswas'){
    		$judul = 'Export Absensi Siswa';
    		$data  = fitrah::all(); 
    		return $this->exportall($judul,$jenis,$data);
    	}elseif ($jenis == 'absensigurus') {
    		$judul = 'Export Absensi Guru';
    		$data  = mal::all();
    	}else{
    		return redirect()->back();
    	}
    }

    public function exportall($judul,$jenis,$data)
    {

    	Excel::create($judul, function($excel) use ($data,$judul,$jenis) {
		    $excel->sheet($judul, function($sheet) use ($data,$jenis) {
		        $sheet->loadView('excel.'.$jenis,compact('data'));
		    });
		})->export('xlsx');

    }

    public function export($jenis,$judul,$start,$end,$data)
    {
    	Excel::create($judul, function($excel) use ($data,$judul,$jenis,$start,$end) {
            $excel->sheet('export', function($sheet) use ($data,$jenis,$start,$end) {
                $sheet->loadView('excel.'.$jenis,compact('data','start','end'));
            });
        })->export('xlsx');

    }
    public function convert($value)
    {
        $d = explode('/', $value);
        $date = $d[2]."-".$d[0]."-".$d[1];
        return $date;
    }
}
