<div class="row">
    <div class="col-md-6 mb-2">
        <label>Name</label>
        <input type="text" name="name" class="form-control"
            value="{{ $profile->name ?? old('name') }}" required>
    </div>

    <div class="col-md-6 mb-2">
        <label>Email</label>
        <input type="email" name="email" class="form-control"
            value="{{ $profile->email ?? old('email') }}" required>
    </div>

    <div class="col-md-6 mb-2">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control"
            value="{{ $profile->phone ?? old('phone') }}">
    </div>

    <div class="col-md-6 mb-2">
        <label>LinkedIn</label>
        <input type="text" name="linkedin" class="form-control"
            value="{{ $profile->linkedin ?? old('linkedin') }}">
    </div>

    <div class="col-md-6 mb-2">
        <label>Github</label>
        <input type="text" name="github" class="form-control"
            value="{{ $profile->github ?? old('github') }}">
    </div>

    <div class="col-md-6 mb-2">
        <label>Photo</label>
        <input type="file" name="photo" class="form-control">

        @if(isset($profile) && $profile->photo)
        <img src="{{ asset('storage/'.$profile->photo) }}" width="70" class="mt-2">
        @endif
    </div>

    <div class="col-md-6 mb-2">
        <label>Gallery</label>
        <input type="file" name="galery" class="form-control">

        @if(isset($profile) && $profile->galery)
        <img src="{{ asset('storage/'.$profile->galery) }}" width="70" class="mt-2">
        @endif
    </div>

    <div class="col-md-12 mb-2">
        <label>Bio</label>
        <textarea name="bio" class="form-control">{{ $profile->bio ?? old('bio') }}</textarea>
    </div>

    <div class="col-md-12 mb-2">
        <label>About</label>
        <textarea name="about" class="form-control" rows="4">{{ $profile->about ?? old('about') }}</textarea>
    </div>
</div>
