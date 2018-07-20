@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Jurusan
						<div class="pull-right">
                      @role('admin')
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
                      @endrole
						</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Jurusan</th>
										<th colspan="2">Action</th>
									</tr>
								</thead>
								<tbody>
									@php
										$no = 1;
									@endphp
									@foreach($jurusans as $data)
									<tr>
										<td>{{ $no++ }}</td>
										<td>{{ $data->nama_jurusan }}</td>
										<td>
											<a class="btn btn-warning" href="{{route('jurusan.edit', $data->id)}}">Edit</a>
										</td>
										<td>
											<form method="post" action="{{route('jurusan.destroy', $data->id)}}">
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
	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('jurusan.store') }}" method="post">
      {{csrf_field()}}

<div class="form-group {{$errors->has('nama_jurusan') ? 'has-error' : ''}}">
								<label class="control-label">Nama Jurusan</label>
								<input type="text" class="form-control" name="nama_jurusan" required>
								@if ($errors->has('nama_jurusan'))
									<span class="help-blocks">
										<strong>{{$errors->first('nama_jurusan')}}</strong>
									</span>
								@endif
							</div>

  <button type="submit" class="btn btn-danger">Submit</button>

        <button type="reset" class="btn btn-warning">Reset</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </form>
    </div>


@endsection