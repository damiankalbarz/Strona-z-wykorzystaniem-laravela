
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Change own name</div>

                    <div class="card-body bg-secondary">
                        <form method="POST" action="{{ route('cars.update', $car->id) }} " enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="own_name" value="{{$car->name}}" required autocomplete="name" disabled>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="own_name" class="col-md-4 col-form-label text-md-end">{{ __('Own name') }}</label>

                                <div class="col-md-6">
                                    <input id="own_name" type="text" class="form-control @error('own_name') is-invalid @enderror" name="own_name" value="{{ $car->own_name }}" required autocomplete="own_name" autofocus>

                                    @error('own_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        CHANGE
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
