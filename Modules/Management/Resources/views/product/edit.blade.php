@extends('management::layouts.master', ['title' => 'Produk'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $updateLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="col-md-3">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="210" data-allowed-file-extensions="png jpg jpeg" data-default-file="{{ $product->picture->url }}" />
                            </div>
                        </div>
                        <div class="col-md-9 row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Bahasa</label>
                                    <select name="language" class="form-control">
                                        <option value="id">Indonesia</option>
                                        <option value="en">English</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="name" type="test" class="form-control" value="{{ $product->name }}" required >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="is_best" class="custom-switch-input" value="1" @if($product->is_best) checked @endif>
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Best Produk</span>
                                    </label>
                                </div>
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
