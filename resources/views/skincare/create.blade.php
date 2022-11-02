@extends('layouts.admin')
@section('content')
<h1>This is Create Skincare Page</h1>
<form action="/skincare" class="w-50 mx-5" method="POST"
    enctype="multipart/form-data">
    @csrf
    <input type="file" class="form-control mb-2" name="image_path" placeholder="Enter makeup's image">
    <input type="text" class="form-control mb-2" name="name" placeholder="Enter makeup's name">
    <input type="text" class="form-control mb-2" name="desc" placeholder="Enter makeup's description">
    <input type="number" class="form-control mb-2" name="count" placeholder="Enter makeup's count">
    <input type="number" class="form-control mb-2" name="price" placeholder="Enter price's makeup">
    
    <div>
        <label>Choose a type:</label>
        <select name="type_id">
            @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>  
            @endforeach
        </select>
    </div>
    {{-- <input type="text" class="form-control mb-2" name="name-type" placeholder="Enter type's name">
    <input type="text" class="form-control mb-2" name="desc-type" placeholder="Enter type's description"> --}}
    <button class="btn btn-success" type="submit">
        Submit
    </button>
    
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
@endsection