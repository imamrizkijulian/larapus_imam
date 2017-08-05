@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li class="active">Buku</li>
			</ul>
			<div class="panel panel-primary">
					<div class="panel-heading">
						<button class="btn btn-default"><a href="{{ url('/admin/books/create') }}">Tambah Data</a></button>
					</div>
					<div class="panel-body">
						{!! $html->table(['class'=>'table table-bordered']) !!}
					</div>
				</div>
		</div>
	</div>
</div>
@endsection

@section('scripts')
{!! $html->scripts() !!}
@endsection