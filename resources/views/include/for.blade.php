<h1>FOR</h1>

<!--foreach--
@foreach($names as $name)

  {{ $loop->index}}.{{$name}}<br/>


@endforeach-->

<!--@foreach ($names as $name)

    @if($loop->first)
         {{ $name }}<br/>
    @endif
    

    @if($loop->last)

    {{ $name }} <br/>
    @endif

@endforeach -->    





<!--forloop-
@for($i=0; $i<=7; $i++)

{{$i}}
<br/>
@endfor-->


<!--@forelse($names as $name)


     {{$name}}<br/>
@empty
   
   No users found in list

@endforelse-->





@php

$i=10;

 switch($i){

 case 1: echo "this is part 1"; break;
 case 2: echo "this is part 2"; break;
 case 3: echo "this is part 3"; break;
 default: echo "this is default section";
}

@endphp




