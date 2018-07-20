<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0;border-color:#ccc;width: 100%; }
	.tg td{font-family:Arial;font-size:12px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
	.tg th{font-family:Arial;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
	.tg .tg-3wr7{font-weight:bold;font-size:12px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	.tg .tg-ti5e{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;;text-align:center}
	.tg .tg-rv4w{font-size:10px;font-family:"Arial", Helvetica, sans-serif !important;}
</style>
<h3>Export Absensi Guru {{ isset($awal) ? 'Tgl. '.$awal : '' }}  {{ isset($akhir) ? 's/d '.$akhir : '' }}</h3>
<table border="1" class="tg">
<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Keahlian Bidang Studi</th>
										<th>Keterangan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($absensigurus as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td><p>{{ $data->guru->nama }}</p></td>
										<td><p>{{ $data->guru->keahlian_bidang_studi }}</p></td>
										<td>{{ $data->keterangan }}</td>
		@if($d->status == "unverified")
		Belum Terbagikaan 
		@else 
		Terbagikan 
		@endif
    </td>
	<td class="tg-rv4w">{{ date_format($d->created_at,'d-m-Y') }}</td>
</tr>
<tr>
	<td colspan="5">Perolehan</td>
</tr>
@foreach($d->count->ket as $key =>$value)
<tr>
	<td colspan="3" class="tg-rv4w">{{ $key }} : </td>
	<td colspan="2" class="tg-rv4w">
		@foreach($value as $k => $v)
			{{ $k }} : {{ $v }} ,
		@endforeach
	</td>
</tr>
@endforeach
<tr>
	<td colspan="5">Pembagian</td>
</tr>
<tr>
	<td class="tg-rv4w" colspan="3">Mustahik</td>
	<td class="tg-rv4w" colspan="2">Jumlah</td>
</tr>
@foreach($d->ket as $key =>$value)
		<tr>
			<td class="tg-rv4w" colspan="3">{{ $key }}</td>
			<td class="tg-rv4w" colspan="2">
				@foreach($value as $k => $v)
					{{ $k }} : {{ $v }} ,<br>
				@endforeach
			</td>
		</tr>
		@endforeach
@endforeach
</table>