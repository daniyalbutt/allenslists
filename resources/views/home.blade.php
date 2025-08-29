@extends('layouts.app')

@section('content')
<div class="br-mainpanel">
    <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
    </div>
    <div class="br-pagebody mg-t-5 pd-x-30">
        <div class="row row-sm">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-teal rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-list tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Categories</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $category }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                <div class="bg-primary rounded overflow-hidden">
                    <div class="pd-25 d-flex align-items-center">
                        <i class="fa fa-shopping-cart tx-60 lh-0 tx-white op-7"></i>
                        <div class="mg-l-20">
                            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Total Products</p>
                            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">{{ $product }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
