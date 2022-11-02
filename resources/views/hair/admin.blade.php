@extends('layouts.admin')
@section('content')
    <h1>This is Hair Page</h1>
    <a href="./create" class="btn btn-success mb-3 ms-3" role="button">Add</a>
    <div class="row w-100">
        <div class="col">
            <h5 class="ms-3 fw-bold">SHAMPOO</h5>
            @foreach ($shampoo as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center border-bottom w-100 ms-3">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        {{ $item->name }}                
                    </div>
                    {{ $item->desc }}
                </div>
                <span class="badge bg-dark rounded-pill me-2">
                    {{ $item->price }}
                </span>  
                <span class="badge bg-danger rounded-pill">
                    {{ $item->count }}
                </span>
                <a href="./{{ $item->id }}/edit" class="btn btn-info ms-2">Edit</a>
                <form action="./{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="ms-2 btn btn-danger">Delete</button>
                </form>
            </li>
            @endforeach       
        </div>
        <div class="col">
            <h5 class="fw-bold">CONDITIONER</h5>
            @foreach ($conditioner as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center border-bottom w-100">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">
                        {{ $item->name }}                
                    </div>
                    {{ $item->desc }}
                </div>
                <span class="badge bg-dark rounded-pill me-2">
                    {{ $item->price }}
                </span>  
                <span class="badge bg-danger rounded-pill">
                    {{ $item->count }}
                </span>
                <a href="./{{ $item->id }}/edit" class="btn btn-info ms-2">Edit</a>
                <form action="./{{ $item->id }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="ms-2 btn btn-danger">Delete</button>
                </form>
            </li>
            @endforeach
        </div>
    </div>
@endsection