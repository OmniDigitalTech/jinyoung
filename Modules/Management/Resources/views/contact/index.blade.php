@extends('management::layouts.master', [
    'title' => 'Kontak',
    'active' => 'contact'
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $updateLink }}" method="POST">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Alamat</label>
                                @foreach(json_decode($address->value, true) as $item)
                                    <input name="address[]" type="text" class="form-control mb-2" value="{{ @$item }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                @foreach(json_decode($email->value, true) as $item)
                                    <input name="email[]" type="text" class="form-control mb-2" value="{{ @$item }}">
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                @foreach(json_decode($phone->value, true) as $item)
                                    <input name="phone[]" type="text" class="form-control mb-2" value="{{ @$item }}">
                                @endforeach
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
