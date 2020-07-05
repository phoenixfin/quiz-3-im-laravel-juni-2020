@extends('layouts.master')

@push('additional_scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Last Modified</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($items as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->date_created }}</td>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a href="/article/{{$item->id}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <a href="/article/{{$item->id}}/edit" class="btn btn-sm btn-default"><i class="fas fa-edit"></i></a>
                        <form action="/article/{{$item->id}}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
