@extends('layouts.app')

@section('content')
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
            <a class="breadcrumb-item" href="#">Products</a>
            <span class="breadcrumb-item active">All Products</span>
        </nav>
    </div>
    <div class="br-pagebody">
        <div class="br-section-wrapper">
            @if(session('success'))
            <div class="alert alert-success fade show" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Products List</h6>
            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                    <thead>
                        <tr>
                            <th class="wd-15p">Sno.</th>
                            <th class="wd-15p">Name</th>
                            <th class="wd-15p">Price</th>
                            <th class="wd-15p">Category</th>
                            <th class="wd-25p">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $key => $value)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td><span class="btn btn-sm btn-info">{{ $value->category->name }}</span></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <a href="{{ route('products.edit', $value->id) }}" class="btn btn-primary btn-sm mg-r-5"><div><i class="fa fa-edit"></i></div></a>
                                    <form action="{{ route('products.destroy', $value->id) }}" method="POST" 
                                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mg-r-5"><div><i class="fa fa-trash"></i></div></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
