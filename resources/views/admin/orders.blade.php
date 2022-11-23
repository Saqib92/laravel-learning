@extends('layouts.app')
@section('title')
    Admin Orders
@stop
@section('content')

    <div class="container mt-5 mb-5">
        <div class="list-group w-auto">
            @foreach ($orders as $order)
                <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    {{-- <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32"
                    class="rounded-circle flex-shrink-0"> --}}
                    <div class="d-flex gap-2 w-100 justify-content-between">
                        <div>
                            <h6 class="mb-0">{{ $order['full_name'] }}</h6>
                            <p class="mb-0 opacity-75">Some notes about order.</p>
                        </div>

                        <small class="text-bold text-nowrap">
                            Rs. {{ $order['total'] }}
                        </small>

                        <small class="opacity-50 text-nowrap">
                            {{ date_format(date_create($order['created_at']), 'd-m-Y') }}
                        </small>
                    </div>
                </a>
            @endforeach

        </div>

    </div>

@endsection
