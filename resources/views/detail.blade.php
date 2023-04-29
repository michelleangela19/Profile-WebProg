@extends('master')

@section('judul', 'Meal Detail')
@section('description', 'Detail deskripsi dari makanan yang terpilih')

@section('content')
<div class="mealIsi">
    <h1 class="font">Detail '{{ $chosen['name'] }}'</h1>
    <div class="mealDesc">
        <img class="mealImg" src="{{ asset('media/' . $chosen['image']) }}"
            alt="">
        <div class="font">
            <h2>Name : {{ $chosen['name'] }}</h2>
            <h3>Status : {{ $chosen['status'] }}</h3>
            <p>Description : {{ $chosen['desc'] }}</p>
            <p>Rating : {{ $chosen['rating'] }}</p>
        </div>
    </div>
</div>
@endsection
