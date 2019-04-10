@extends('layouts.master')
@section('content')
<div class="content-wrapper">
	<div class="content">
		<div class="row">
			<div class="col-md-3">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>{{$allbarang->count()}}</h3>
						<p>Jumlah Barang</p>
					</div>
					<div class="icon">
						<i class="fa fa-truck"></i>
					</div>
					<a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="small-box bg-red">
					<div class="inner">
						<h3>{{$allpetugas->count()}}</h3>
						<p>Jumlah Petugas</p>
					</div>
					<div class="icon">
						<i class="fa fa-wrench"></i>
					</div>
					<a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>{{$alldistributor->count()}}</h3>
						<p>Jumlah Distributor</p>
					</div>
					<div class="icon">
						<i class="fa fa-users"></i>
					</div>
					<a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>{{$alluser->count()}}</h3>
						<p>Jumlah Pengguna</p>
					</div>
					<div class="icon">
						<i class="fa fa-user"></i>
					</div>
					<a href="#" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="box box-primary">
					<div class="box-header">Data Barang</div>
					<div class="box-body">
						<table class="table table-bordered" id="barang">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Barang</th>
									<th>Kode Jenis</th>
									<th>Harga Net</th>
									<th>Harga Jual</th>
									<th>Stok</th>
								</tr>
							</thead>
							<tbody>
								@foreach($allbarang as $brg)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$brg->namabarang}}</td>
									<td>{{$brg->kodejenis}}</td>
									<td>{{$brg->harganet}}</td>
									<td>{{$brg->hargajual}}</td>
									<td>{{$brg->stok}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<div class="box box-success">
					<div class="box-header">Data Petugas</div>
					<div class="box-body">
						<table class="table table-bordered" id="petugas">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama Petugas</th>
									<th>Alamat</th>
									<th>Email</th>
									<th>Telepon</th>
								</tr>
							</thead>
							<tbody>
								@foreach($allpetugas as $ptgs)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$ptgs->namapetugas}}</td>
									<td>{{$ptgs->alamat}}</td>
									<td>{{$ptgs->email}}</td>
									<td>{{$ptgs->telpon}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="box box-danger">
					<div class="box-header">Data User</div>
					<div class="box-body">
						<table class="table table-bordered" id="user">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Email</th>
									<th>Hak</th>
								</tr>
							</thead>
							<tbody>
								@foreach($alluser as $us)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$us->name}}</td>
									<td>{{$us->email}}</td>
									<td><b>Coming Soon!</b></td>
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
@section('foot-content')
<script>
	$('#barang').DataTable();
	$('#petugas').DataTable();
	$('#user').DataTable();
</script>
@endsection