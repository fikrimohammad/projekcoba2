@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add Product Form</div>

                <div class="card-body">

                    <div class="text-right pb-3">
                        <a class="btn btn-success" href="{{ route('products.index') }}">
                            <span class="oi oi-arrow-circle-left pr-1"></span> Back to Product List
                        </a>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <label for="name" class="col-form-label text-md-right">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <label for="detail" class="col-form-label text-md-right">Detail</label>

                            <div class="col-md-8">
                                <textarea id="detail" type="text" class="form-control" name="detail" required style="min-height: 200px;"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0 justify-content-center">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    <span class="oi oi-pencil pr-1"></span> Create
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
