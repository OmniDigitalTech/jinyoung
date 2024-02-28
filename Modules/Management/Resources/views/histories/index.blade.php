@extends('management::layouts.master', ['title' => 'History'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $storeLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-3">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="150" data-allowed-file-extensions="png jpg jpeg" data-default-file="" />
                            </div>
                        </div>
                        <div class="col-md-9 row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tahun</label>
                                    <input name="year" type="number" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-8">
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
                            <h3>Riwayat</h3>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('management.history.update-setting') }}" method="GET" class="row justify-content-end">
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
                                <th>Icon</th>
                                <th>Tahun</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($histories as $history)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $history->picture->url }}" class="menu-img img-fluid" style="height: 75px"></a>
                                    </td>
                                    <td>{{ $history->year }}</td>
                                    <td>{{ $history->title }}</td>
                                    <td>{{ $history->description }}</td>
                                    <td>
                                        <a href="{{ route('management.history.edit', $history) }}" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                                        <a href="{{ route('management.history.delete', $history) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
