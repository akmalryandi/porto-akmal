@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Tool</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('tools.update', $tool->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                @include('tools.form', ['tool' => $tool])

                <button class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
