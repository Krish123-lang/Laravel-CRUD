@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <h1 class="text-center">Create Product</h1>
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="" class="form-label">Name</label>
                            {{-- Also displaying old message --}}
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                            {{-- displaying Error  --}}
                            @if ($errors->has('name'))
                                <span class="text-danger"> {{ $errors->first('name') }} </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Description</label>
                            {{-- Also displaying old message --}}

                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                            {{-- displaying Error  --}}

                            @if ($errors->has('description'))
                                <span class="text-danger"> {{ $errors->first('description') }} </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">Image</label>
                            {{-- Also displaying old message --}}

                            <input type="file" name="image" id="" class="form-control"
                                value="{{ old('image') }}">
                            {{-- displaying Error  --}}

                            @if ($errors->has('image'))
                                <span class="text-danger"> {{ $errors->first('image') }} </span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-dark mt-2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
