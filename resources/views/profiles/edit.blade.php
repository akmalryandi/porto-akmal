@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Project Baru</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('profiles.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')

                @include('profiles.form', ['profile' => $profile])

                <button class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
@endsection
