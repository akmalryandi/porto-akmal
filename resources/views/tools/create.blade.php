@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Tool Baru</h3>
        </div>

        <div class="card-body">

            <form action="{{ route('tools.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('tools.form')

                <button class="btn btn-success mt-3">Save</button>
            </form>
        </div>
    </div>
@endsection
