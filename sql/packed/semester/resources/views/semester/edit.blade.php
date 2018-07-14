@extends('template-pricing.blade.php')
<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@section('content')

@forelse($table_semester as $row)
<h1>Edit semester : {{ $row->id_semester }}</h1>
	<form action="{{ url('/') }}/semester/{{ $row->id_semester }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="line">
			<strong>sem_Name : </strong>
			<input type="text" name="sem_name" value="{{ $row->sem_name }}" >
		</div>
		<div class="line">
			<a href="{{ url('/') }}/semester">back</a>
			<button type="submit">Update</button>
		</div>
		</style>
	</form>
@endforelse
<button class="button-2"> update tasks </button>
	</form>
@empty	
	<div>This semester id does not exist</div>
@endsection  