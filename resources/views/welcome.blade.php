@extends('layout')


@section('content')

    <div class="container">
        <h1 align="center">My Gallery</h1>
        <div class="row">
            <div class="col-md-3 gallery-item">
                <div><img src="/image.png" alt="" class="img-thumbnail"></div>
                <a href="/show" class="btn btn-info my-button">Show</a>
                <a href="/edit" type="button" class="btn btn-warning my-button">Edit</a>
                <a href="#" type="button" class="btn btn-danger my-button">Delete</a>
            </div>
            <div class="col-md-3 gallery-item">
                <div><img src="/image.png" alt="" class="img-thumbnail"></div>
                <a href="/show" class="btn btn-info my-button">Show</a>
                <a href="/edit" type="button" class="btn btn-warning my-button">Edit</a>
                <a href="#" type="button" class="btn btn-danger my-button">Delete</a>
            </div>
        </div>
    </div>
@endsection

