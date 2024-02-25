@extends('management::layouts.master', ['title' => 'Edit Visi Misi'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $updateLink }}" method="post" class="row">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Visi</label>
                                <input name="vision" type="text" class="form-control" value="vision">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Misi</label>
                                <input name="mission" type="text" class="form-control" value="mission">
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
