<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\absensisiswas;
use App\petugaspikets;
use App\siswas;
use App\kelas;
use Excel;
class AbsensisiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensisiswas = absensisiswas::with('kelas','siswa','petugaspiket')->get();
        return view('absensisiswa.index',compact('absensisiswas'));
    }

    public function absensi()
    {    
        $absensisiswas = absensisiswas::with('kelas','siswa','petugaspiket')->get();
        return view('absensisiswa.absensi',compact('absensisiswas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $absensisiswas = absensisiswas::all(); 
        $petugaspikets = petugaspikets::all();
        $siswas = siswas::all();
        $kelas = kelas::all();
        return view('absensisiswa.create',compact('absensisiswas','petugaspikets', 'siswas','kelas'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kelas'=>'required|',
            'id_siswas'=>'required|',
            'id_petugaspikets'=>'required|',
            'tanggal'=>'required|min:2',
            'keterangan'=>'required|min:2',
        ]);

        $absensisiswas = new absensisiswas;
        $absensisiswas->id_kelas = $request->id_kelas;
        $absensisiswas->id_siswas = $request->id_siswas;
        $absensisiswas->id_petugaspikets = $request->id_petugaspikets;
        $absensisiswas->tanggal = $request->tanggal;
        $absensisiswas->keterangan = $request->keterangan;
        $absensisiswas->save();
        return redirect()->route('absensisiswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $absensisiswas = absensisiswas::findOrFail($id);
            return view('absensisiswa.show', compact('absensisiswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(absensisiswas $absensisiswa)
    {
        $absensisiswas = absensisiswas::findOrFail($absensisiswa->id);
        $siswas = siswas::all();
        $kelas = kelas::all();
        $petugaspikets = petugaspikets::all();
        $selectedsiswa = absensisiswas::findOrFail($absensisiswa->id)->id_siswas;
        $selectedkelas = absensisiswas::findOrFail($absensisiswa->id)->id_kelas;
        $selectedpetugaspiket = absensisiswas::findOrFail($absensisiswa->id)->id_petugaspikets;
        return view('absensisiswa.edit',compact('absensisiswas','siswas','kelas','petugaspikets','selectedsiswa', 'selectedkelas', 'selectedpetugaspiket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
        
            'id_siswas'=>'required|max:255',
            'id_kelas'=>'required|max:255',
            'id_petugaspikets'=>'required|max:255',
            'tanggal'=>'required|min:2',
            'keterangan'=>'required|min:2',
        ]);

        $absensisiswas = absensisiswas::findOrFail($id);
        $absensisiswas->id_siswas = $request->id_siswas;
        $absensisiswas->id_kelas = $request->id_kelas;
        $absensisiswas->id_petugaspikets = $request->id_petugaspikets;
        $absensisiswas->tanggal = $request->tanggal;
        $absensisiswas->keterangan = $request->keterangan;
        $absensisiswas->save();
        return redirect()->route('absensisiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $absensisiswas = absensisiswas::findOrFail($id);
         $absensisiswas->delete();
            return redirect()->route('absensisiswa.index');
    }

    public function filter($id)
    {
        $siswas = siswas::where('id_kelas',$id)->get();
        if($siswas->count() > 0){
            foreach ($siswas as $data)
        {
            echo '<option class="form-control" value="'.$data->id.'">'.$data->nama.'</option>';
        }
    }else{
        echo '<option class="forn-control">Tidak Ada Hasil</option>';
    }
}

public function exportall()
 {
    $data = absensigurus::all();

    Excel::create('Export Absensi Guru', function($excel) use ($data) {

        $excel->sheet('Export Absensi Guru', function($sheet) use ($data) {

            $sheet->loadView('print.excel.absensiguru',compact('data'));
        });
    })->export('xlsx');

    }

    public function export(Request $request)
    {
        if($request->start != null && $request->end != null){
            $data = absensigurus::whereBetwen('created_at',[$this->convert($request->start),$this->convert($request->end)])->get();
            $awal = $request->start;
            $akhir = $request->end;

            Excel::create('Export Absensi Guru'.$request->start.'s/d'.$request->end,function($excel) use ($data,$awal,$akhir)
            {
                $excel->sheet('Export Absensi Guru',function($sheet) use ($data,$awal,$akhir){
                    $sheet->loadView('print.excel.absensiguru',compact('data','awal','akhir'));
                });
            })->export('xlsx');
        }else{
            Session::flash("notif",[
                "level"=>"error",
                "title"=>"Gagal",
                "message"=>"Tanggal Harus dipilih terlebih dahulu"
            ]);
            return redirect()->back();
    }
}
}