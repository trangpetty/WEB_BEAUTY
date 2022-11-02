@extends('layouts.admin')
@section('content')
    <h1>Update a skincare</h1>
    <form action="/skincare/{{ $skincare->id }}" class="w-50 mx-5" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="image_path"><b>Image:</b></label>
        <input type="file" class="form-control mb-2" name="image_path" placeholder="Enter skincare's image">
        <img src="{{ asset('images/'.$skincare->image_path) }}" alt="{{ $skincare->desc }}" class="w-25">
        <br>
        <label for="name"><b>Name:</b></label>
        <input type="text" class="form-control mb-2" name="name" placeholder="Enter skincare's name" value="{{$skincare->name}}">
        <label for="desc"><b>Description:</b></label>
        <input type="text" class="form-control mb-2" name="desc" placeholder="Enter skincare's description" value="{{$skincare->desc}}">
        <label for="count"><b>Description</b></label>
        <input type="number" class="form-control mb-2" name="count" placeholder="Enter skincare's count" value="{{$skincare->count}}">
        <label for="price"><b>Price</b></label>
        <input type="number" class="form-control mb-2" name="price" placeholder="Enter price's skincare" value="{{$skincare->price}}">
        <label for="type_id"><b>Type_id</b></label>
        <input type="number" class="form-control mb-2" name="type_id" placeholder="Enter type_id's skincare" value="{{$skincare->type_id}}">
        
        <button class="btn btn-success" type="submit">
            Update
        </button>
        <a class="btn btn-danger" href="/skincare/admin">
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