@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Resumes</h3>
        </div>

        <div class="d-flex bd-highlight mt-3">
            <div class="me-auto bd-highlight">
                <a href="{{ route('resumes.create') }}" type="button" class="btn btn-primary ms-3">Tambah</a>
            </div>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table id="example1" class="table table-striped mb-3">
                    <thead>
                        <tr>
                            <th>Year</th>
                            <th>Job Title</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resumes as $r)
                            <tr>
                                <td>{{ $r->year }}</td>
                                <td>{{ $r->job_title }}</td>
                                <td>{{ $r->company }}</td>
                                <td>
                                    <a href="{{ route('resumes.edit', $r->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('resumes.destroy', $r->id) }}" method="POST" class="d-inline">
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
