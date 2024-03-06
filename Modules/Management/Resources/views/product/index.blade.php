@extends('management::layouts.master', ['title' => 'Produk'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <form action="{{ $storeLink }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-3">
                            <div class="form-group">
                                <input name="picture" type="file" class="dropify" data-height="210" data-allowed-file-extensions="png jpg jpeg" data-default-file="" />
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
                                    <input name="name" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="description" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="checkbox" name="is_best" value="1" class="custom-switch-input">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="custom-switch-description">Best Produk</span>
                                    </label>
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
                            <h3>Produk</h3>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('management.product.update-setting') }}" method="GET" class="row justify-content-end">
                                @csrf
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <label class="mt-1">Display Best</label>
                                        <input name="display_best[]" type="number" class="form-control mx-4 mt-1" value="{{ json_decode($settingbest->value)[0] }}">
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
                                <th>Nama</th>
                                <th>Deskripsi</th>
                                <th>Best Produk</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ $product->picture->url }}" class="menu-img img-fluid" style="height: 75px"></a>
                                    </td>
                                    <td>{{ $product->language }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        @if($product->is_best)
                                            <div class="bg-success text-center" style="width: 20px; height: 20px; color: white"><i class="fa fa-check"></i></div>
                                        @else
                                            <div class="bg-danger text-center" style="width: 20px; height: 20px; color: white"><i class="fa fa-ban"></i></div>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('management.product.edit', $product) }}" class="btn btn-sm btn-warning"><i class="fa fa-pen"></i></a>
                                        <a href="{{ route('management.product.delete', $product) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
