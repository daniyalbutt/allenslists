@extends('layouts.front-app')
@section('content')
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 pl-0">
                    <h1>{{ config('app.name', 'Laravel') }}</h1>
                </div>
                <div class="col-6 pr-0 header-2">
                    <div class="icon">
                        <a href="">(313) 539-2838</a>
                    </div>
                    <div class="icon">
                        <a href=""><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="search-box">
            <div class="box">
                <!-- Options Section Row -->
                <select class="form-control OP">
                    @foreach($data as $key => $value)
                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="box search-section">
                <input type="text" class="search-input" placeholder="Search devices (e.g. '15 Pro 256')" onkeyup="filterDevices()">
            </div>
        </div>
        <div class="search-result">
            <div class="device-list-section">
                <div id="loader" style="display:none; text-align:center; padding:20px;">
                    <div class="spinner"></div>
                    <p>Loading devices...</p>
                </div>
            </div>
            <p class="stolen">We do not buy stolen or unlawfully obtained devices.</p>
        </div>
    </section>
@endsection