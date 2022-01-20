@extends('layouts.base')


@section('content')

<div class="bg-light p-5 rounded">
    <h1>Create Product</h1>

    <form action="{{route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="first">Categorie</label>
              <select  class="form-control" name="category_id">
                  @foreach ($categories as $cat )
                  <option value="{{ $cat->id }}"  >{{ $cat->name }}</option>
                  @endforeach


              </select>
            </div>
          </div>
          <!--  col-md-6   -->

          <div class="col-md-6">
            <div class="form-group">
              <label for="last">Name</label>
              <input name="name" type="text" class="form-control" placeholder="" id="last">
            </div>
          </div>
          <!--  col-md-6   -->
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="company">Price</label>
              <input type="text" name="price" class="form-control" placeholder="$" id="company">
            </div>


          </div>
          <!--  col-md-6   -->

          <div class="col-md-6">

            <div class="form-group">
              <label for="phone">Description</label>
              <textarea name="description" type="text" class="form-control" id="phone" placeholder="description article"></textarea>
              {{-- <input type="text" class="form-control" id="phone" placeholder=""> --}}
            </div>
          </div>
          <!--  col-md-6   -->
        </div>
        <!--  row   -->


        <div class="row">
          <div class="col-md-6">

            <div class="form-group">
              <label for="email">Quantity</label>
              <input type="integer" class="form-control" id="email" >
            </div>

          </div>

          <div class="col-md-6">

            <div class="form-group">
              <label for="email">Image</label>
              <input type="file" class="form-control" name="photo" >
            </div>

          </div>
         </div></br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</div>


@stop
