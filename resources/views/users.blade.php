<x-header componentProps="I am"/>
<h1> Page view</h1>



    @for($i = 0; $i < 10; $i++)
    <h4>{{$i+1}}</h4>
    @endfor


    @foreach($names as $n)
    <h5>{{$n}}</h5>
    @endforeach