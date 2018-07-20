<h3>Export Absensi Siswa {{ isset($awal) ? 'Tgl. '.$awal : '' }}  {{ isset($akhir) ? 's/d '.$akhir : '' }}</h3>
<table border="1" class="tg">
<thead>
<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Keahlian Bidang Studi</th>
										<th>Keterangan</th>
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
										<td>
		@if($d->status == "unverified")
		Belum Terbagikaan 
		@else 
		Terbagikan 
		@endif
    </td>
	<td>{{ date_format($d->created_at,'d-m-Y') }}</td>
</tr>
<tr>
	<td colspan="5">Perolehan</td>
</tr>
@foreach($d->count->ket as $key =>$value)
<tr>
	<td colspan="3">{{ $key }} : </td>
	<td colspan="2">
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
	<td colspan="3">Mustahik</td>
	<td colspan="2">Jumlah</td>
</tr>
@foreach($d->ket as $key =>$value)
		<tr>
			<td colspan="3">{{ $key }}</td>
			<td colspan="2">
				@foreach($value as $k => $v)
					{{ $k }} : {{ $v }} ,<br>
				@endforeach
			</td>
		</tr>
		@endforeach
@endforeach
</table>