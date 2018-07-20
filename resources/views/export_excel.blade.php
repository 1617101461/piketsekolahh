<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel</title>
</head>
<body>
	<div align="center">
	<a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
</div>
<div class="table-responsive">
							<table id="myTable">
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
										<td><p>{{ $data->nama }}</p></td>
										<td><p>{{ $data->keahlian_bidang_studi }}</p></td>
										<td>{{ $data->keterangan }}</td>
										</tr>
										@endforeach
							</table>
						</td>
					</tr>
				</tbody>
		    </div>
        </body>
    </html>