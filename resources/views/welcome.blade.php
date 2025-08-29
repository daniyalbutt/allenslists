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
        <div class="container-fluid">
            <!-- Device List Section Row -->
            <div class="row">
                <div class="col-12 device-list-section">
                    <div class="device-item">
                        <div class="device-name">16 Pro Max 256GB</div>
                        <div class="device-price">670</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro Max 512GB</div>
                        <div class="device-price">760</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro Max 1TB</div>
                        <div class="device-price">850</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro 128GB</div>
                        <div class="device-price">520</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro 256GB</div>
                        <div class="device-price">600</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro 512GB</div>
                        <div class="device-price">700</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Pro 1TB</div>
                        <div class="device-price">750</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Plus 128GB</div>
                        <div class="device-price">370</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Plus 256GB</div>
                        <div class="device-price">460</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 Plus 512GB</div>
                        <div class="device-price">540</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16E 128GB</div>
                        <div class="device-price">180</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16E 256GB</div>
                        <div class="device-price">230</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16E 512GB</div>
                        <div class="device-price">290</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 128GB</div>
                        <div class="device-price">340</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 256GB</div>
                        <div class="device-price">450</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">16 512GB</div>
                        <div class="device-price">500</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro Max 512GB</div>
                        <div class="device-price">580</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro Max 1TB</div>
                        <div class="device-price">650</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro  128GB</div>
                        <div class="device-price">380</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro 256GB</div>
                        <div class="device-price">470</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro 512GB</div>
                        <div class="device-price">550</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 Pro 1TB</div>
                        <div class="device-price">600</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 PLUS 128GB</div>
                        <div class="device-price">290</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 PLUS 256GB</div>
                        <div class="device-price">360</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 PLUS 512GB</div>
                        <div class="device-price">400</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 PLUS 128GB</div>
                        <div class="device-price">230</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 PLUS 256GB</div>
                        <div class="device-price">300</div>
                    </div>
                    <div class="device-item">
                        <div class="device-name">15 512GB</div>
                        <div class="device-price">360</div>
                    </div>
                </div>
            </div>
            <p>We do not buy stolen or unlawfully obtained devices.</p>
        </div>
    </section>
@endsection