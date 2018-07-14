<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<!doctype html>
@forelse($table_activity_type as $row)
<h1>Edit activity_type : {{ $row->id }}</h1>
<form action="{{ url('/') }}/activity_type/{{ $row->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="line">
<strong>Name : </strong>
<input type="text" name="name" value="{{ $row->name }}" >
</div>
<div class="line">
<strong>Age : </strong>
<input type="number" name="age" value="{{ $row->age }}" >
</div>
<div class="line">
<strong>Address : </strong>
<input type="text" name="address" value="{{ $row->address }}" >
</div>
<div class="line">
<strong>Salary : </strong>
<input type="number" step="any" name="salary" value="{{ $row->salary }}" >
</div>
<div class="line">
<a href="{{ url('/') }}/activity_type">back</a>
<button type="submit">Update</button>
</div>
</form>
@empty
<div>This activity_type id does not exist</div>
@endforelse