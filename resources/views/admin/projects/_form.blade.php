@csrf

@if($errors->any())
  <div class="alert alert-danger">
    <ul class="mb-0">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<div class="row">
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="name">Project Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name ?? '') }}" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="slug">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $project->slug ?? '') }}">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="client_name">Client Name <span class="text-danger">*</span></label>
      <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name', $project->client_name ?? '') }}" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="category">Category</label>
      <input type="text" class="form-control" id="category" name="category" value="{{ old('category', $project->category ?? '') }}">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="status">Status <span class="text-danger">*</span></label>
      <select class="form-select" id="status" name="status" required>
        @foreach(['draft', 'published', 'archived'] as $status)
          <option value="{{ $status }}" @selected(old('status', $project->status ?? 'draft') === $status)>{{ ucfirst($status) }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="execution_date">Execution Date</label>
      <input type="date" class="form-control" id="execution_date" name="execution_date" value="{{ old('execution_date', isset($project->execution_date) ? $project->execution_date->format('Y-m-d') : '') }}">
    </div>
  </div>
</div>

<div class="mb-4">
  <label class="form-label" for="short_description">Short Description <span class="text-danger">*</span></label>
  <textarea class="form-control" id="short_description" name="short_description" rows="3" required>{{ old('short_description', $project->short_description ?? '') }}</textarea>
</div>

<div class="mb-4">
  <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
  <textarea class="form-control" id="description" name="description" rows="6" required>{{ old('description', $project->description ?? '') }}</textarea>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="featured_image">Featured Image</label>
      <input type="file" class="form-control" id="featured_image" name="featured_image" accept="image/*">
      @if(!empty($project) && $project->featuredImageUrl())
        <div class="mt-2">
          <img src="{{ $project->featuredImageUrl() }}" alt="Featured image" class="img-fluid rounded" style="max-height: 120px;">
        </div>
      @endif
    </div>
  </div>
  <div class="col-md-6">
    <div class="mb-4">
      <label class="form-label" for="gallery_images">Gallery Images</label>
      <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple accept="image/*">
    </div>
  </div>
</div>

<div class="mb-4 text-end">
  <button type="submit" class="btn btn-alt-primary">
    <i class="fa fa-save me-1"></i> {{ isset($project) ? 'Update Project' : 'Save Project' }}
  </button>
</div>
