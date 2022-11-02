@extends('layouts.admin')
@section('content')
    <h1>Update a makeup</h1>
    <form action="/makeup/{{ $makeup->id }}" class="w-50 mx-5" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image_path"><b>Image:</b></label>
        <input type="file" class="form-control mb-2" name="image_path" placeholder="Enter makeup's image">
        <img src="{{ asset('images/'.$makeup->image_path) }}" alt="{{ $makeup->desc }}" class="w-25">
        <br>
        <label for="name"><b>Name:</b></label>
        <input type="text" class="form-control mb-2" name="name" placeholder="Enter makeup's name" value="{{$makeup->name}}">
        <label for="desc"><b>Description:</b></label>
        <input type="text" class="form-control mb-2" name="desc" placeholder="Enter makeup's description" value="{{$makeup->desc}}">
        <label for="count"><b>Description</b></label>
        <input type="number" class="form-control mb-2" name="count" placeholder="Enter makeup's count" value="{{$makeup->count}}">
        <label for="price"><b>Price</b></label>
        <input type="number" class="form-control mb-2" name="price" placeholder="Enter price's makeup" value="{{$makeup->price}}">
        <label for="type_id"><b>Type_id</b></label>
        <input type="number" class="form-control mb-2" name="type_id" placeholder="Enter type_id's makeup" value="{{$makeup->type_id}}">
        
        <button class="btn btn-success" type="submit">
            Update
        </button>
        <a class="btn btn-danger" href="/makeup/admin">
            Cancle
        </a>
        
        </form>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p class="text-danger">
                        {{ $error }}
                    </p>
                @endforeach
            </div>
        @endif
    </form>
@endsection