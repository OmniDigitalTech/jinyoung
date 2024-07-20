@extends('management::layouts.master', [
    'title' => 'History',
    'active' => 'history'
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($pictures as $picture)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ $picture->url }}" target="_blank">{{ $picture->file_name }}</a></td>
                                    <td>
                                        <a href="{{ route('management.backup.download-picture', $picture) }}">Download</a>
                                    </td>
                                </tr>
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
