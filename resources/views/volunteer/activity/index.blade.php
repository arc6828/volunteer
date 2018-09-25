@extends('monster-lite/layouts/theme')

@section('title','Activity')

@section('breadcrumb-menu')
<a href="{{ url('/') }}/activity/create" class="btn pull-right hidden-sm-down btn-success">
	<i class="fa fa-plus"></i> New Activity
</a>
@endsection

@section('content')
<style>
	.event-container{
		border: 1px solid #eee;
	    border-radius: 10px;
	    background: #f2f7f8;
	}
	.event-description{
		padding: 20px;
	}
</style>
<div class="card">
    <div class="card-block">
    	<div class="row">
    		<div class="col-md-9 align-self-center">
		        <h4 class="card-title">Activity Table</h4>
		        <h6 class="card-subtitle">Display all activities in the database</h6>
    		</div>
    		<div class="col-md-3 align-self-center">
				<form class="form-material" action="{{ url('/') }}/activity" method="GET">
					<input class="form-control form-control-line" type="text" name="q" placeholder="Search ..." value="{{ $q }}">
					<button class="hide btn btn-success" type="submit">Search</button>
				</form>
    		</div>
    	</div>

		<div class="row">
			@foreach($table_activity as $row)
    		<div class="col-lg-4">
				<a href="{{ url('/') }}/activity/{{$row->activity_id}}/edit">
					<div class="event-container">
						<div><img src="{{ url('/') }}/img/no-photo-event.jpg" width="100%"></div>
						<div class="event-description">
							<h3>{{$row->activity_name}}</h3>
							<div><i class="fa fa-calendar"></i> {{ $row->date_begin }} - {{ $row->date_end }}</div>
							<div><i class="fa fa-clock-o"></i> {{ $row->time_begin }} - {{ $row->time_end }}</div>
							<div><i class="fa fa-map-marker"></i> {{ $row->place }} </div>
						</div>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</div>
<div  class="hide" style="position : fixed; bottom:70px; right:30px;">
	<a href="{{ url('/') }}/activity/create" class="btn btn-circle pull-right btn-success btn-lg">
		<i class="fa fa-plus"></i>
	</a>
</div>
@endsection
