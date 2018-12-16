<h1>Conditional statement</h1>


<!--{{ strlen($name) }}<br/>-->

<!--@if(strlen($name) < 5) 

 String has lenght>0

@elseif(strlen($name)> 5 && strlen($name) < 10)
  
  strlen length within 5 to 10

 @elseif(strlen($name) >10)

   string has length>10

 @else

 string has lenght =0 

 @endif-->


 <!--isset --->

<!--@isset($name)

  variable is set {{$name}}

@endisset
  
   Variable is not found  
  -->
  

  <!--empty-->

  <!--@isset($name)

     @empty($name)

       Value is empty
     @endempty
     
      {{$name}} 

   @endisset   -->

  <!-- @unless ($names)

      Array has no value

    @endunless  

     @foreach($names as  $name)

       {{ $name }}

      @endforeach -->