@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Tools</h3>
        </div>

        <div class="d-flex bd-highlight mt-3">
            <div class="me-auto bd-highlight">
                <a href="{{ route('tools.create') }}" type="button" class="btn btn-primary ms-3">Tambah</a>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="example1" class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tools as $t)
                            <tr>
                                <td>{{ $t->name }}</td>
                                <td>
                                    @if ($t->icon_path)
                                        <img src="{{ asset('storage/' . $t->icon_path) }}" width="40">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('tools.edit', $t->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('tools.destroy', $t->id) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button onclick="return confirm('Delete?')"
                                            class="btn btn-sm btn-danger">Del</button>
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
