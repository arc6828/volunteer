<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
@forelse($table_student as $row)
<h1>Edit Student : {{ $row->id }}</h1>
<form action="{{ url('/') }}/student/{{ $row->id }}" method="POST">
{{ csrf_field() }}
{{ method_field('PUT') }}
<div class="line">
<strong>ID Student : </strong>
<input type="number" name="id_student" value="{{ $row->id_student }}" >
</div>
<div class="line">
<strong>Name : </strong>
<input type="text" name="stu_name" value="{{ $row->stu_name }}" >
</div>
<div class="line">
<strong>Lastname : </strong>
<input type="text" name="stu_lastname" value="{{ $row->stu_lastname }}" >
</div>
<div class="line">
<strong>Degree : </strong>
<input type="text" name="degree" value="{{ $row->degree }}" >
</div>
<div class="line">
<strong>Major : </strong>
<input type="number" name="major" value="{{ $row->major }}" >
</div>
<div class="line">
<a href="{{ url('/') }}/student">back</a>
<button type="submit">Update</button>
</div>
</form>
@empty
<div>This Student id does not exist</div>
@endforelse