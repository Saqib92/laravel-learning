<x-header componentProps="I am"/>
<h1> Page view</h1>

@include('contact')

@foreach($names as $n)
<h4>{{$n}}</h4>
@endforeach

<script>
    let data = @json($names);

    console.log(data);

</script>