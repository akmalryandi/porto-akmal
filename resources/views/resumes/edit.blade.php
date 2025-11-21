@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Resume</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('resumes.update', $resume->id) }}" method="POST">
                @csrf @method('PUT')
                @include('resumes.form', ['resume' => $resume])

                <button class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
