@extends('master')

@section('judul', 'Meal Detail')
@section('description', 'Detail deskripsi dari makanan yang terpilih')

@section('content')
<div>
    <h1>Detail '{{ $chosen['name'] }}'</h1>
        <div class="isi">
            <img class="" src="{{ asset('images/' . $chosen['image']) }}"
                alt="">
            <div class="deskripsi">
                <h2 class="card-title">Name : {{ $chosen['name'] }}</h2>
                <h3>Status : {{ $chosen['status'] }}</h3>
                <p>Description : {{ $chosen['desc'] }}</p>
                <p>Rating : {{ $chosen['rating'] }}</p>
            </div>
        </div>
</div>
@endsection
