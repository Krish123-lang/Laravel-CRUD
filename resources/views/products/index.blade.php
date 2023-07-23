@extends('layouts.app')

@section('main')
    <div class="container">
        <h2 class="text-center">Products</h2>
        <div>
            <a href="{{ route('create') }}" class="btn btn-primary">Add Products</a>
        </div>

        {{-- Creating Table for displaying data --}}
        <table class="table table-hover my-2" border="1px">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }} </th>

                        {{-- ALSO FOR SHOWING DETAILS OF THE ITEM --}}
                        <td><a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a> </td>

                        <td><img src="products/{{ $product->image }}" alt="" class="rounded-circle" width="30"
                                height="30"></td>
                        <td>
                            {{-- To get product ID and edit it --}}
                            <a href="products/{{ $product->id }}/edit" class="btn btn-sm btn-secondary">Edit</a>

                            {{-- FOR DELETING --}}
                            <form action="products/{{ $product->id }}/delete" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
        {{-- tO GET PAGINATION --}}
        {{ $products->links() }}
    </div>
@endsection
