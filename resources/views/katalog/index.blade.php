@extends('app')

@section('title', 'Cart | Index')

@section('content')
  <div class="card mt-3" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">id : {{ $carts->product->id }} </li>
        <li class="list-group-item">Nama Produk : {{ $carts->product->name }} </li>
        <li class="list-group-item">Harga : {{ $carts->product->price }}</li>
        <li class="list-group-item">Size : {{ $carts->product->size }}</li>
        <li class="list-group-item">Kategori Produk : {{$product->category->name}}</li>
      </ul>
      <div class="card-body">
        <h5 class="card-title">Deskripsi</h5>
        <p class="card-text">{{ $carts->product->description }}</p>
      </div>
  </div>
@endsection
