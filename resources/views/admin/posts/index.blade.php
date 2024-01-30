@extends('admin.layouts.layout')
@section('title','Posts')


@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="{{route('admin.post.create')}}" class="btn btn-primary btn-icon-split">
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
                        <th>Main Title</th>
                        <th>Secondary Title</th>
                        <th>Author</th>
                        <th>Paragraph</th>
                        <th>Title Image</th>
                        <th>Image</th>
                        <th class="text-right" width="150px">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Main Title</th>
                        <th>Secondary Title</th>
                        <th>Author</th>
                        <th>Paragraph</th>
                        <th>Title Image</th>
                        <th>Image</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->main_title}}</td>
                            <td>{{$post->secondary_title}}</td>
                            <td>{{$post->author}}</td>
                            <td>{{$post->paragraph}}</td>
                            <td>
                                <div>
                                    <img src="{{ asset('uploads/thumbnails/' . $post->title_image) }}" >
                                </div>
                            </td>
                            <td>
                                <div>
                                    <img src="{{ asset('uploads/thumbnails/' . $post->image) }}" >
                                </div>
                            </td>

                            <td class="text-right">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="{{route('admin.post.edit',['post' => $post->id])}}" class="btn btn-info btn-circle btn-sm mr-1">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <form method="post"
                                          action="{{ route('admin.post.destroy', ['post' => $post->id]) }}">
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
