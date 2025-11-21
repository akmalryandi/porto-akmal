@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Products</h3>
        </div>

        <div class="d-flex bd-highlight mt-3">
            <div class="me-auto bd-highlight">
                <a href="{{ route('profiles.create') }}" type="button" class="btn btn-primary ms-3">Tambah</a>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="example1" class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Photo</th>
                            <th>Gallery</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($profiles as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->phone }}</td>
                                <td>
                                    @if ($p->photo)
                                        <img src="{{ asset('storage/' . $p->photo) }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    @if ($p->galery)
                                        <img src="{{ asset('storage/' . $p->galery) }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('profiles.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('profiles.destroy', $p->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Delete?')">Del</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
