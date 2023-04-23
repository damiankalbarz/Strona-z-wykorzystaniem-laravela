
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-white text-md-center"><h2>If you don't like the name, change it or delete it</h2></div>
            <div class="col-6">
                <a class="float-right" href="{{ route('cars.create') }}">
                    <button type="button" class="btn btn-primary">ADD</button>
                </a>
            </div>
        <br>

        <div class="row">
            <table class="table table-dark table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Own name</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->own_name }}</td>
                        <td>{{ $car->name }}</td>
                        <td>

                            <a href=" {{route('cars.edit', $car->id) }}">
                                <button class="btn btn-success btn-sm"><i class="far fa-edit">EDIT</i></button>
                            </a>

                            <a href=" {{route('cars.destroy', $car->id) }}">
                                <button class="btn btn-danger btn-sm"><i class="far fa-edit">DELETE</i></button>
                            </a>

                            <!--
                            <button class="btn btn-danger btn-sm delete" data-id="{ $car->id }">
                                <i class="far fa-trash-alt">DELETE</i>
                            </button>-->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$cars->Links()}}

        </div>


    </div>
@endsection
@section('javascript')

@endsection

