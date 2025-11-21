<div class="mb-3">
    <label>Tool Name</label>
    <input type="text" name="name" class="form-control"
        value="{{ $tool->name ?? old('name') }}" required>
</div>

<div class="mb-3">
    <label>Icon</label>
    <input type="file" name="icon_path" class="form-control">

    @if(isset($tool) && $tool->icon_path)
    <img src="{{ asset('storage/'.$tool->icon_path) }}" width="60" class="mt-2">
    @endif
</div>
