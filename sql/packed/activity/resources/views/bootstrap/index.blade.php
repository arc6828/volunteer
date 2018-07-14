@extends('layout/template-pricing') 
@section('title', 'This is title of this page')
@section('content')
<h2>Section Content</h2>
<div>
นี่คือสวน content / header และ footer ของ
page จะถูกระบุไวแลวใน template ซึ่งเรียกใชโดย
การ extends template.blade.php (ซึ่งคลายกับการ
include file)
</div>
@endsection
@section('content')
<h2>Section Content</h2>
<div>
"This is my content"
</div>
@endsection
@include('include/sidebar')
