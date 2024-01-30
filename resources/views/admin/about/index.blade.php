@extends('admin.layouts.layout')
@section('title','About')


@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="{{route('admin.about.create')}}" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                <span class="text">Add new</span>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Paragraph</th>
                        <th>Image</th>
                        <th class="text-right" width="150px">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Paragraph</th>
                        <th>Image</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($abouts as $about)
                        <tr>
                            <td>{{$about->paragraph}}</td>
                            <td>
                                <div>
                                    <img src="{{ asset('uploads/thumbnails/' . $about->image) }}" >
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="{{route('admin.about.edit',['about' => $about->id])}}" class="btn btn-info btn-circle btn-sm mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form method="post"
                                          action="{{ route('admin.about.destroy', ['about' => $about->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></button>
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

@endsection
