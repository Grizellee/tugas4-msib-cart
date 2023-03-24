@extends('app')

@section('title', 'Detail | Product')

@section('content')
    <div class="d-flex row gap-4 justify-content-center">
        <div class="card mt-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama Produk : {{ $product->name }} </li>
                <li class="list-group-item">Harga : {{ $product->price }}</li>
                <li class="list-group-item">Size : {{ $product->size }}</li>
                <li class="list-group-item">Kategori Produk : {{$product->category->name}}</li>
              </ul>
              <div class="card-body">
                <h5 class="card-title">Deskripsi</h5>
                <p class="card-text">{{ $product->description }}</p>
                <form action="/katalog" method="post" id="toCartForm-{{$product->id}}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input class="btn btn-primary" type="submit" value="Add to Cart">
                    <a href="{{url('/product')}}" class="btn btn-warning"><strong> Back </strong></a>

                </form>
              </div>
          </div>
    </div>

@endsection
