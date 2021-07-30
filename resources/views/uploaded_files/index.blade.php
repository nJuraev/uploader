@extends('layouts.app')
@section('content')
    @include('uploaded_files.form')
    <div class="row">
        <div class="col-12">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Link</th>
                    <th>FileSize</th>
                    <th>Created At</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td><a href="{{$file->file_path}}">Download</a></td>
                        <td>{{$file->file_size}}</td>
                        <td>{{$file->created_at->format('Y-m-d H:i')}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection