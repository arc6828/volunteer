<link href="{{ url('/') }}/style.css" rel="stylesheet" type="text/css">
<h1>Create New Student</h1>
<form action="{{ url('/') }}/student" method="POST">
{{ csrf_field() }}
{{ method_field('POST') }}
<div class="line">
<strong>ID Student : </strong>
<input type="number" name="id_student" placeholder="id here..." >
</div>
<div class="line">
<strong>Name : </strong>
<input type="text" name="stu_name" placeholder="name here..." >
</div>
<div class="line">
<strong>Lastname : </strong>
<input type="text" name="stu_lastname" placeholder="lastname here..." >
</div>
<div class="line">
<strong>Degree : </strong>
<input type="text" name="degree" placeholder="degree here..." >
</div>
<div class="line">
<strong>Major : </strong>
<input type="number" name="major" placeholder="major here..." >
</div>

<div class="line">
<a href="{{ url('/') }}/student">back</a>
<button type="submit">Create</button>
</div>
</form>