@extends('app')

@section('title', 'Home | Product')

@section('content')
<div class="d-flex mb-2">
    <a href="{{ url('product.add')}}" class="btn btn-success mt-3" type="button">+ Tambah Produk</a>
 </div>

    {{-- <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">
                <strong> {{$item->name}}</strong> ({{ $item->price }})
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->category->name}}</h6>
            <div class="card-text">
                <div>{{ $item->size}}</div>
                <div>{{ $item->description }}</div>
                <a href="/product/{{$item->id}}/edit">
                    <button class="btn btn-warning mt-3" type="button">Ubah</button>
                </a>
                <a href="/product/{{$item->id}}/delete">
                    <button class="btn btn-danger mt-3" type="button">Hapus</button>
                </a>
            </div>
        </div>
    </div> --}}
    {{-- <div class="card mt-3" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <div class="card-title">
                <strong> {{$item->name}}</strong> ({{ $item->price }})
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{$item->category->name}}</h6>
            <div class="card-text">
                <div>{{ $item->size}}</div>
                <div>{{ $item->description }}</div>
                <a href="/product/{{$item->id}}/edit">
                    <button class="btn btn-warning mt-3" type="button">Ubah</button>
                </a>
                <a href="/product/{{$item->id}}/delete">
                    <button class="btn btn-danger mt-3" type="button">Hapus</button>
                </a>
            </div>
        </div>
      </div> --}}

      {{-- <div class="row">
            <div class="card text-center mb-3 mt-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><strong> {{$item->name}}</strong> ({{ $item->price }})</h5>
                    <p class="card-text">
                        <h6 class="card-subtitle mb-2 text-muted">{{$item->category->name}}</h6>
                        <div>{{ $item->size}}</div>
                        <div>{{ $item->description }}</div>
                    </p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
      </div> --}}

      <table class="table table-striped-border text-light mx-3">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Size</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Kategori</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->size}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->category->name}}</td>
            <td>
                <a href="{{url('product/'. $item->id)}}" class="btn btn-outline-info mx-1"> <strong>Read</strong> </a>
                <a href="/product/{{$item->id}}/edit" class="btn btn-outline-warning mx-1"><strong>Edit</strong>  </a>
                <a href="/product/{{$item->id}}/delete" class="btn btn-outline-danger mx-1"><strong>Hapus</strong>  </a>

            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

@endsection
