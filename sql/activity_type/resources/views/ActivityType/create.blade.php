<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<!doctype html>
<h1>Create New activity_type</h1>
<form action="{{ url('/') }}/activity_type" method="POST">
{{ csrf_field() }}
{{ method_field('POST') }}
<div class="line">
<strong>Name : </strong>
<input type="text" name="name" placeholder="name here..." >
</div>
<div class="line">
<strong>Age : </strong>
<input type="number" name="age" placeholder="age here..." >
</div>
<div class="line">
<strong>Address : </strong>
<input type="text" name="address" placeholder="address here..." >
</div>
<div class="line">
<strong>Salary : </strong>
<input type="number" step="any" name="salary" placeholder="salary here..." >
</div>
<div class="line">
<a href="{{ url('/') }}/activity_type">back</a>
<button type="submit">Create</button>
</div>
</form>