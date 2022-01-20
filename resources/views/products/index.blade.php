@extends('layouts.base')


@section('content')

<div class="bg-light p-5 rounded">
    <div class="d-flex align-items-center justify-between">
        <h3>Products List</h3>
        <a href="{{ route('products.create') }}" class="btn btn-success">Add</a>

    </div>


      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($products as $product)
            <div class="col">



              <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100px" height="50px"  role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"> <img src="{{ asset($product->photo) }}" alt="" srcset="" width="200px" height="200px"></svg>

                <div class="card-body">
                  <p class="card-text">{{ Str::substr($product->description, 0, 15) }}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    </div>
                    <small class="text-muted font-bold">$ {{ $product->price }}</small>
                  </div>
                </div>
              </div>

            </div>
            @endforeach


          </div>
        </div>
      </div>


  </div>

@stop

