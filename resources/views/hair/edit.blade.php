@extends('layouts.admin')
@section('content')
    <h1>Update a hair</h1>
    <form action="/hair/{{ $hair->id }}" class="w-50 mx-5" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image_path"><b>Image:</b></label>
        <input type="file" class="form-control mb-2" name="image_path" placeholder="Enter hair's image">
        <img src="{{ asset('images/'.$hair->image_path) }}" alt="{{ $hair->desc }}" class="w-25">
        <br>
        <label for="name"><b>Name:</b></label>
        <input type="text" class="form-control mb-2" name="name" placeholder="Enter hair's name" value="{{$hair->name}}">
        <label for="desc"><b>Description:</b></label>
        <input type="text" class="form-control mb-2" name="desc" placeholder="Enter hair's description" value="{{$hair->desc}}">
        <label for="count"><b>Description</b></label>
        <input type="number" class="form-control mb-2" name="count" placeholder="Enter hair's count" value="{{$hair->count}}">
        <label for="price"><b>Price</b></label>
        <input type="number" class="form-control mb-2" name="price" placeholder="Enter price's hair" value="{{$hair->price}}">
        <label for="type_id"><b>Type_id</b></label>
        <input type="number" class="form-control mb-2" name="type_id" placeholder="Enter type_id's hair" value="{{$hair->type_id}}">
        <button class="btn btn-success" type="submit">
            Update
        </button>
        <a class="btn btn-danger" href="/hair/admin">
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