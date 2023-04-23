
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make up a name!</div>

                    <div class="card-body bg-secondary">
                        <form method="POST" action="{{ route('cars.store')}}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <select id="name"  class="form-control @error('name') is-invalid @enderror" name="name"  required autocomplete="name" autofocus>
                                        <option value="Audi A7">Audi A7</option>
                                        <option value="Audi A6">Audi A6</option>
                                        <option value="Audi A5">Audi A5</option>
                                        <option value="Audi A4">Audi A4</option>
                                        <option value="Audi A3">Audi A3</option>
                                    </select>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="own_name" class="col-md-4 col-form-label text-md-end">{{ __('own_name') }}</label>

                                <div class="col-md-6">
                                    <input id="own_name" type="text" class="form-control @error('own_name') is-invalid @enderror" name="own_name" value="{{ old('own_name') }}" required autocomplete="own_name" autofocus>

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
                                        ADD
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
