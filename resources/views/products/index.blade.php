@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <strong>Products Dashboard</strong>
                </div>

                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="text-right pb-3">
                        <a class="btn btn-primary" href="{{ route('products.create') }}">
                            <span class="oi oi-plus pr-1"></span> Add New Product
                        </a>
                    </div>

                    <table class="table table-hover" style="border-radius: 2px;">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>
                                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">


                                        <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">
                                            <span class="oi oi-list pr-1"></span> Show
                                        </a>
                                        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">
                                            <span class="oi oi-pencil pr-1"></span> Edit
                                        </a>


                                        @csrf
                                        @method('DELETE')


                                        <button type="submit" class="btn btn-danger">
                                            <span class="oi oi-trash pr-1"></span> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
