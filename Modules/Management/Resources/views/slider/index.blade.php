@extends('management::layouts.master', ['title' => 'Slider'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $storeLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="300" data-allowed-file-extensions="png jpg jpeg"  />
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Sub Judul</label>
                                <input name="subtitle" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Slider</h4>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Sub Judul</th>
                                <th>Action</th>
                            </tr>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $slider->picture->url }}" class="menu-img img-fluid" style="height: 75px"></a>
                                    </td>
                                    <td>{{ $slider->title }}</td>
                                    <td>{{ $slider->subtitle }}</td>
                                    <td>
                                        <a href="{{ route('management.slider.up', $slider) }}" class="btn btn-lg btn-success"><i class="fa fa-arrow-up"></i></a>
                                        <a href="{{ route('management.slider.edit', $slider) }}" class="btn btn-lg btn-warning"><i class="fa fa-pen"></i></a>
                                        <a href="{{ route('management.slider.delete', $slider) }}" class="btn btn-lg btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                </div>
            </div>
        </div>
    </div>
@endsection
