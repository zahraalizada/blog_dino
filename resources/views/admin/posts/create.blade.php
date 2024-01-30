@extends('admin.layouts.layout')
@section('title','New Post')


@section('content')

    <div class="card shadow mb-4">
        <div class="card-header">
            Add new Post
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm">
                    <form class="w-100" method="post" action="{{route('admin.post.store')}}"
                          enctype="multipart/form-data"
                          class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        @csrf
                        {{--                        <div class="custom-file mb-3">--}}
                        {{--                            <input type="file" name="image" class="custom-file-input" id="customFileLang" lang="es">--}}
                        {{--                            <label class="custom-file-label" for="customFileLang">Select Image</label>--}}
                        {{--                        </div>--}}
                        <div class=" mb-3">
                            <div><label for=" ">  Title Image </label></div>
                            <input type="file" name="title_image" class=" ">
                        </div>
                        <div class=" mb-5">
                            <div><label for=" ">  Image </label></div>
                            <input type="file" name="image" class=" ">
                        </div>

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
                                <div class="form-group mt-3">
                                    <label for="main_title_az">  Main Title (AZE)</label>
                                    <input type="text" class="form-control" id="main_title_az" name="main_title:az">
                                </div>
                                <div class="form-group">
                                    <label for="secondary_title_az">  Secondary Title (AZE)</label>
                                    <input type="text" class="form-control" id="secondary_title_az" name="secondary_title:az">
                                </div>

                                <div class="form-group">
                                    <label for="author_az">  Author (AZE)</label>
                                    <input type="text" class="form-control" id="author_az" name="author:az">
                                </div>

                                <div class="form-group ">
                                    <label for="paragraph_az">Paragraph (AZE)</label>
                                    <textarea class="form-control" name="paragraph:az" id="paragraph_az"
                                              rows="3"></textarea>
                                </div>

                            </div>


                            {{--  ENGLISH --}}
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-group mt-3">
                                    <label for="main_title_en">  Main Title (EN)</label>
                                    <input type="text" class="form-control" id="main_title_en" name="main_title:en">
                                </div>
                                <div class="form-group">
                                    <label for="secondary_title_en">  Secondary Title (EN)</label>
                                    <input type="text" class="form-control" id="secondary_title_en" name="secondary_title:en">
                                </div>

                                <div class="form-group">
                                    <label for="author_en">  Author (EN)</label>
                                    <input type="text" class="form-control" id="author_en" name="author:en">
                                </div>

                                <div class="form-group">
                                    <label for="paragraph_en">Paragraph (EN)</label>
                                    <textarea class="form-control" id="paragraph_en" name="paragraph:en"
                                              rows="3"></textarea>
                                </div>

                            </div>
                        </div>


                        <div class="input-group mt-3">
                            <div class="input-group-append ">
                                <button type="submit" class="btn btn-primary rounded">
                                    Add
                                </button>
                            </div>
                        </div>


                    </form>
                </div>

            </div>
            <hr>


        </div>
    </div>
    <!-- DataTales Example -->

@endsection


