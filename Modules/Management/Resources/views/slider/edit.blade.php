@extends('management::layouts.master', [
    'title' => 'Edit Slider',
    'active' => 'slider'
])
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
                                <input name="picture" type="file" class="dropify" data-height="300" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ $slider->picture->url }}" />
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="title" type="text" class="form-control" value="{{ $slider->title }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sub Judul</label>
                                <input name="subtitle" type="text" class="form-control" value="{{ $slider->subtitle }}">
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
