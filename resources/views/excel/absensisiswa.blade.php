<h3>Export Alokasi Infaq Sodaqoh {{ isset($awal) ? 'Tgl. '.$awal : '' }}  {{ isset($akhir) ? 's/d '.$akhir : '' }}</h3>
<table border="1" class="tg">
<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>kelas</th>
										<th>Tanggal</th>
										<th>Petugas Piket</th>
										<th>Keterangan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($absensisiswas as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td><p>{{ $data->siswa->nama }}</p></td>
										<td><p>{{ $data->kelas->nama_kelas }}</p></td>
										<td>{{ $data->tanggal }}</td>
										<td><p>{{ $data->petugaspiket->nama_petugas }}</p></td>
										<td>{{ $data->keterangan }}</td>
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