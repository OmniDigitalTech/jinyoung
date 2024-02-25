@extends('management::layouts.master', ['title' => 'Visi Misi'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $updateLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input name="year" type="number" class="form-control" value="{{ $history->year }}" required>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="title" type="text" class="form-control" value="{{ $history->title }}" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="description" class="form-control" required>{{ $history->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
