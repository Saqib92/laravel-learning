<x-header componentProps="I am"/>
<h1> Page view</h1>

@if($name == 'Saqib Khan')
<h1 class="one">{{$name}} </h1>
@elseif($name == 10)
<h1  lass="two">{{$name}}</h1>
@else
<h1 class="three">{{$name}}</h1>
@endif