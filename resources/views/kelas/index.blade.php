@extends('layouts.admin')
@section('content')
		<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Kelas
					<div class="panel-title pull-right">
						<a class="btn btn-primary" href="{{route('kelas.create')}}">Tambah</a>
					</div>
					</div>
					<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Kelas</th>
										<th>Nama Jurusan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($kelas as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama_kelas }}</td>
										<td><p>{{ $data->jurusan->nama_jurusan }}</p></td>
										<td>
											<a class="btn btn-warning" href="{{route('kelas.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('kelas.destroy', $data->id)}}">
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