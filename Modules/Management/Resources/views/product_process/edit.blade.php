@extends('management::layouts.master', ['title' => 'Edit Product Process'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $updateLink }}" method="POST" class="row" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ $process->picture->url }}" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Bahasa</label>
                                <select name="language" class="form-control">
                                    <option value="id">Indonesia</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Step</label>
                                <input name="step" type="text" class="form-control" required value="{{ $process->step }}">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="title" type="text" class="form-control" required value="{{ $process->title }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="form-control" required>{{ $process->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
