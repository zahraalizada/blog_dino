@extends('admin.layouts.layout')
@section('title','Posts')


@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header">
            <a href="#" class="btn btn-primary btn-icon-split">
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
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Image</th>

                        <th>Secondary Title</th>
                        <th>Paragraph</th>

                        <th class="text-right" width="150px">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Main Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Image</th>

                        <th>Secondary Title</th>
                        <th>Paragraph</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td>Main Title</td>
                        <td>Subtitle</td>
                        <td>Description</td>
                        <td>Image</td>

                        <td>Secondary Title</td>
                        <td>Paragraph</td>
                        <td class="text-right">
                            <a href="#" class="btn btn-info btn-circle btn-sm">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="#" class="btn btn-danger btn-circle btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>

                        </td>
                    </tr>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

@endsection
