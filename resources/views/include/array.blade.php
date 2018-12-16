<h2>Pass data to view</h2>
<?php

//print_r($users);
//foreach ($users as $user) {
	 
	//echo $user. "<br/>";
//}

?>


Company Name: {{ $name }} <br/><br/>

 
@foreach($users as $user)

{{ $user }}<br/>



@endforeach