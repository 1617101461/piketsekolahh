@extends('layouts.admin')
@section('content')
	<div class="row">
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Absensi Siswa
					<div class="panel-title pull-right">
						<a href="{{route('absensisiswa.index')}}">Kembali</a>
					</div>
					</div>
					<div class="panel-body">
						<form action="{{route('absensisiswa.update', $absensisiswas->id)}}" method="post">
							<input name="_method" type="hidden" value="PATCH">
							{{csrf_field()}}

								<div class="form-group {{ $errors->has('id_siswas') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<select name="id_siswas" class="form-control">
			  				@foreach($siswas as $data)
			  				<option value="{{ $data->id }}" {{ $selectedsiswa == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_siswas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_siswas') }}</strong>
                            </span>
                        @endif
			  		</div>

			  			<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
			  			<label class="control-label">Kelas</label>	
			  			<select name="id_kelas" class="form-control">
			  				@foreach($kelas as $data)
			  				<option value="{{ $data->id }}" {{ $selectedkelas == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_kelas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_kelas'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_kelas') }}</strong>
                            </span>
                        @endif
			  		</div>


							<div class="form-group {{$errors->has('tanggal') ? 'has-error' : ''}}">
								<label class="control-label">Tanggal</label>
								<input type="date" name="tanggal" class="form-control" value="{{$absensisiswas->tanggal}}" required>
								@if ($errors->has('tanggal'))
									<span class="help-block">
										<strong>{{$errors->first('tanggal')}}</strong>
									</span>
								@endif
							</div>

								<div class="form-group {{ $errors->has('id_petugaspikets') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Guru</label>	
			  			<select name="id_petugaspikets" class="form-control">
			  				@foreach($petugaspikets as $data)
			  				<option value="{{ $data->id }}" {{ $selectedpetugaspiket == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_petugas }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('id_petugaspikets'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_petugaspikets') }}</strong>
                            </span>
                        @endif
			  		</div>

							<div class="form-group {{$errors->has('keterangan') ? 'has-error' : ''}}">
								<label class="control-label">keterangan</label>
								<br>
								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="Sakit" {{ $absensisiswas->keterangan == 'Izin' ? 'checked' : '' }}> Izin

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="Sakit" {{ $absensisiswas->keterangan == 'Sakit' ? 'checked' : '' }}> Sakit

								<label type="radio-inline"> 
								<input type="radio" name="keterangan" class="flat" value="Alfa" {{ $absensisiswas->keterangan == 'Alfa' ? 'checked' : '' }}> Alfa

							</label>
								@if ($errors->has('keterangan'))
									<span class="help-block">
										<strong>{{$errors->first('keterangan')}}</strong>
									</span>
								@endif
							</div>

							
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Edit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
