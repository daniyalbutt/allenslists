@extends('layouts.app')

@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
           <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
           <a class="breadcrumb-item" href="{{ route('products.index') }}">Products</a>
           <span class="breadcrumb-item active">Edit Product</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Product</h6>

            <form method="post" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" 
                                       value="{{ old('name', $product->name) }}" 
                                       placeholder="Enter Name" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" name="price" 
                                       value="{{ old('price', $product->price) }}" 
                                       placeholder="Enter Price" step="0.01" min="0" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                <select name="category_id" class="form-control" required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $key => $value)
                                        <option value="{{ $value->id }}" 
                                            {{ old('category_id', $product->category_id) == $value->id ? 'selected' : '' }}>
                                            {{ $value->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info">Update Product</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
