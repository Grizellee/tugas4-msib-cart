@extends('app')

@section('title', 'Update | Product')

@section('content')
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    <form action="/product/{{ $product->id }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3 text-light">
            <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control @error ('product_name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_name" value="{{$product->name}}">
            <div id="emailHelp" class="form-text text-light">Produk tidak boleh lebih dari 255</div>
            @error('product_name')
            <div class="invalid-feedback ">
                Nama produk tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3 text-light">
            <label for="exampleInputPassword1" class="form-label">Harga</label>
            <input type="text" class="form-control @error ('price_product') is-invalid @enderror" id="exampleInputPassword1" name="price_product" value="{{$product->price}}">
            @error('product_name')
            <div class="invalid-feedback">
                Harga tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3 text-light">
            <label for="exampleInputPassword1" class="form-label">Size</label>
            <input type="text" class="form-control @error ('size_product') is-invalid @enderror" id="exampleInputPassword1" name="size_product" value="{{$product->size}}">
            @error('product_name')
            <div class="invalid-feedback">
                Size tidak boleh kosong
            </div>
            @enderror
        </div>
        <div class="mb-3 text-light">
            <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error ('product_descripstion') is-invalid @enderror" id="exampleInputPassword1" name="product_descripstion" value="{{$product->description}}">
            @error('product_name')
            <div class="invalid-feedback">
                Deskripsi tidak boleh kosong
            </div>
            @enderror
        </div>
        <select class="form-select @error ('category_id') is-invalid @enderror" aria-label="Default select example" name="category_id" value="{{$product->name}}">
            <option selected>Pilih Kategori Produk</option>
            @foreach ($categories as $category)
                                                {{-- ternary --}}
            <option value="{{ $category->id }}" {{$product->category_id == $category->id ? 'selected': ''}}>
                {{$category->name}}
            </option>



            {{-- if else --}}
            {{-- @if ($product->category_id == $item->id)
                <option value="{{$item->id}}" selected>
                {{$item->name}}
                </option>
            @else
                <option value="{{$item->id}}">
                {{$item->name}}
                </option>
            @endif --}}



            @endforeach
          </select>
          @error('product_name')
            <div class="invalid-feedback">
                Pilih salah satu kategori
            </div>
            @enderror
        <button type="submit" class="btn btn-warning mt-3"> <strong>Edit</strong> </button>
    </form>
@endsection
