<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" class="form-control"
        value="{{ $project->title ?? old('title') }}" required>
</div>

<div class="mb-3">
    <label>Description</label>
    <textarea name="description" class="form-control" rows="3">{{ $project->description ?? old('description') }}</textarea>
</div>

<div class="mb-3">
    <label>Link</label>
    <input type="text" name="link" class="form-control"
        value="{{ $project->link ?? old('link') }}">
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">

    @if(isset($project) && $project->image)
    <img src="{{ asset('storage/'.$project->image) }}" width="80" class="mt-2">
    @endif
</div>

<div class="mb-3">
    <label>Tools (multiple select)</label>
    <select name="tools[]" class="form-select" multiple>
        @foreach($tools as $t)
            <option value="{{ $t->id }}"
                @if(isset($project) && $project->tools->contains($t->id)) selected @endif>
                {{ $t->name }}
            </option>
        @endforeach
    </select>
</div>
