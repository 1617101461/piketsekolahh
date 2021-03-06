@extends('layouts.member')
@section('content')

<style type="text/css"> 
#myInput {
    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 10px 10px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 25%; /* Full-width */
    font-size: 10px; /* Increase font-size */
    padding: 10px 10px 10px 10px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 10px; /* Add some space below the input */
}

#myTable {
    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}
</style>
<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<br>
					<div class="panel-heading">Absensi Siswa
					</div>
						<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
					<div class="panel-body">
						<div class="table-responsive">
							<table id="myTable">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>kelas</th>
										<th>Tanggal</th>
										<th>Petugas Piket</th>
										<th>Keterangan</th>
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
										<td>
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection