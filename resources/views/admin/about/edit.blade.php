@extends('admin.layouts.layout')
@section('title','Update About')


@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            Update About
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form method="post" action="{{route('admin.about.update',['about' => $about->id])}}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        @csrf
                        @method('PUT')

                        <ul class="nav nav-tabs  " id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">AZE
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                        type="button"
                                        role="tab" aria-controls="profile" aria-selected="false">ENG
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="input-group mt-3">
                                    <label for=""></label>
                                    <input type="text" name="name:az" class="form-control bg-light small rounded"
                                           placeholder="..." value="{{ $about->translate('az')->name }}">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="input-group mt-3">
                                    <input type="text" name="name:en" class="form-control bg-light small rounded" placeholder="..." value="{{ $about->translate('en')->name }}">
                                </div>

                            </div>
                        </div>

                        <div class="input-group mt-3">
                            <div class="input-group-append ">
                                <button type="submit" class="btn btn-primary rounded">
                                    Update
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection
