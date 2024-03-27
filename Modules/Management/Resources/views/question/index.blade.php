@extends('management::layouts.master', [
    'title' => 'Pertanyaan',
    'active' => 'question'
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
                                <th>Email</th>
                                <th>Pesan</th>
                                <th>Aksi</th>
                            </tr>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $question->name }}</td>
                                    <td>{{ $question->email }}</td>
                                    <td>{{ substr($question->message, 0, 100) }} ...</td>
                                    <td>
                                        <a href="{{ route('management.question.show', $question) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
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
