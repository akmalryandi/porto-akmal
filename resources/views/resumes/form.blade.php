<div class="mb-3">
    <label>Year</label>
    <input type="text" name="year" class="form-control"
        value="{{ $resume->year ?? old('year') }}" required>
</div>

<div class="mb-3">
    <label>Job Title</label>
    <input type="text" name="job_title" class="form-control"
        value="{{ $resume->job_title ?? old('job_title') }}" required>
</div>

<div class="mb-3">
    <label>Company</label>
    <input type="text" name="company" class="form-control"
        value="{{ $resume->company ?? old('company') }}" required>
</div>

<div class="mb-3">
    <label>Job Description</label>
    <textarea name="job_desc" class="form-control">{{ $resume->job_desc ?? old('job_desc') }}</textarea>
</div>
