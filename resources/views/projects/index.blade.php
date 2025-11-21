@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Projects</h3>
        </div>

        <div class="d-flex bd-highlight mt-3">
            <div class="me-auto bd-highlight">
                <a href="{{ route('projects.create') }}" type="button" class="btn btn-primary ms-3">Tambah</a>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="example1" class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Tools</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $p)
                            <tr>
                                <td>{{ $p->title }}</td>
                                <td>
                                    @if ($p->image)
                                        <img src="{{ asset('storage/' . $p->image) }}" width="60">
                                    @endif
                                </td>
                                <td>
                                    @foreach ($p->tools as $tool)
                                        <span class="badge bg-secondary">{{ $tool->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('projects.edit', $p->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('projects.destroy', $p->id) }}" method="POST" class="d-inline">
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
