@php
	$a=20;
	$b=['student1'=>'A','student2'=>'b','student3'=>'C'];
	print_r($b);
@endphp

<!-- echo  -->
{{$a}}
<!-- echo -->

<br>

<!-- conditional statment -->
@if($a==10)
	<input type="" name="">
@else
	<select></select>
@endif
<!-- conditional statment -->


<!-- loop	 -->
@for($i=0;$i<10;$i++)
	{{$i}}
@endfor

@foreach($b as $d=>$a)
	<br>
	{{$d}} And Name {{$a}}
	<br>
@endforeach
<!-- loop	 -->