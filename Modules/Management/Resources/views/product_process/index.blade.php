@extends('management::layouts.master', [
    'title' => 'Product Process',
    'active' => 'product_process'
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $storeLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="300" data-allowed-file-extensions="png jpg jpeg" required/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Bahasa</label>
                                <select name="language" class="form-control">
                                    <option value="all">Semua</option>
                                    <option value="id">Indonesia</option>
                                    <option value="en">English</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Step</label>
                                <input name="step" type="number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="title" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="form-control" required></textarea>
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
                    <div class="row w-100">
                        <div class="col-md-6 pt-2">
                            <h3>Product Process</h3>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('management.product-process.update-setting') }}" method="GET" class="row justify-content-end">
                                @csrf
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label class="mt-1">Display</label>
                                        <input name="display[]" type="number" class="form-control mx-4 mt-1" value="{{ json_decode($setting->value)[0] }}">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Gambar</th>
                                <th>Bahasa</th>
                                <th>Step</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($processes as $process)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $process->picture->url }}" class="menu-img img-fluid" style="height: 75px"></a>
                                    </td>
                                    <td>{{ $process->language }}</td>
                                    <td>{{ $process->step }}</td>
                                    <td>{{ $process->title }}</td>
                                    <td>{{ $process->description }}</td>
                                    <td>
                                        <a href="{{ route('management.product-process.edit', $process) }}" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                                        <a href="{{ route('management.product-process.delete', $process) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
