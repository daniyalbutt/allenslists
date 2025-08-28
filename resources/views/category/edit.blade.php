@extends('layouts.app')

@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
           <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
           <a class="breadcrumb-item" href="{{ route('categories.index') }}">Categories</a>
           <span class="breadcrumb-item active">Edit Category</span>
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

            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Category</h6>

            <form method="post" action="{{ route('categories.update', $category->id) }}">
                @csrf
                @method('PUT')
                <div class="form-layout form-layout-1">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" 
                                       value="{{ old('name', $category->name) }}" 
                                       placeholder="Enter Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-layout-footer">
                        <button type="submit" class="btn btn-info">Update Category</button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
