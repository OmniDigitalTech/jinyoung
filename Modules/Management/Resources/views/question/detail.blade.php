@extends('management::layouts.master', [
    'title' => 'Edit Product Process',
    'active' => 'product_process'
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class=" card-body">
                    <table class="table">
                        <tr>
                            <td style="width: 100px">Nama</td>
                            <td>: {{ $question->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: {{ $question->email }}</td>
                        </tr>
                        <tr>
                            <td>Pesan</td>
                            <td>: {{ $question->message }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
