@extends('body')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow">

            <div class="mt-2 mr-5 card-header d-flex align-items-center">
                <h4 class="font-weight-bold text-primary ml-auto">
                    <a href=" " target="_blank">
                        <i class="bi bi-download"></i>
                    </a>
                </h4>
            </div>

            <div class="card-header text-center">
                <h1 class="font-weight-bold text-primary">
                    @if ($asset->condition)
                        {{ $asset->condition->type }}
                    @endif
                </h1>
            </div>

            <div class="container-fluid">
                <div class="container">

                    <div class="mt-3 mb-3 row">
                        <label class="col-sm-2 col-form-label">Asset Number : </label>
                        <div class="col-sm-10">
                            {{ $asset->asset_number }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Name : </label>
                        <div class="col-sm-10">
                            {{ $asset->name }}
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Device : </label>
                        <div class="col-sm-10">
                            @if ($asset->device)
                                {{ $asset->device->name }}
                            @endif
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label">Description : </label>
                        <div class="col-sm-10">
                            {{ $asset->explanation }}
                        </div>
                    </div>

                    <div class="mt-5 py-5 d-flex justify-content-between">
                        <div class="col-2">
                            <div style="border-bottom: 2px solid black; width: 100%;"></div>
                            <p class="font-weight-bold text-center">PIC</p>
                        </div>
                        <div class="col-2">
                            <div style="border-bottom: 2px solid black; width: 100%;"></div>
                            <p class="font-weight-bold text-center">PIC</p>
                        </div>
                        <div class="col-2">
                            <div style="border-bottom: 2px solid black; width: 100%;"></div>
                            <p class="font-weight-bold text-center">PIC</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
