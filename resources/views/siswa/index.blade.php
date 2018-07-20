@extends('layouts.admin')
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
					<div class="panel-heading">Data Siswa
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('siswa.create')}}">Tambah</a>
					</div>
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
    td = tr[i].getElementsByTagName("td")[2];
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
										<th>NIS</th>
										<th>Nama</th>
										<th>Kelas</th>
										<th>Jenis Kelamin</th>
										<th>Tempat Lahir</th>
										<th>Tanggal Lahir</th>
										<th>Alamat</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($siswas as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nis }}</td>
										<td>{{ $data->nama }}</td>
										<td><p>{{ $data->kelas->nama_kelas }}</p></td>
										<td>{{ $data->jk }}</td>
										<td>{{ $data->tempat_lahir }}</td>
										<td>{{ $data->tanggal_lahir }}</td>
										<td>{{ $data->alamat }}</td>
										<td>
											<a class="btn btn-warning" href="{{route('siswa.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('siswa.destroy', $data->id)}}">
												<input name="_token" type="hidden" value="{{csrf_token()}}">
												<input type="hidden" name="_method" value="DELETE">
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
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