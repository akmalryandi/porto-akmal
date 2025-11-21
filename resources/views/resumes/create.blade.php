@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Resume Baru</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('resumes.store') }}" method="POST">
                @csrf
                @include('resumes.form')

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection
