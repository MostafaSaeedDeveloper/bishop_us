<div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ old('title',$project->title ?? '') }}"></div>
<div class="mb-3"><label>Service</label><input class="form-control" name="service" value="{{ old('service',$project->service ?? '') }}"></div>
<div class="mb-3"><label>Client</label><input class="form-control" name="client" value="{{ old('client',$project->client ?? '') }}"></div>
<div class="mb-3"><label>Technology</label><input class="form-control" name="technology" value="{{ old('technology',$project->technology ?? '') }}"></div>
<div class="mb-3"><label>Description</label><textarea class="form-control editor" name="description">{{ old('description',$project->description ?? '') }}</textarea></div>
<div class="mb-3"><label>Featured Image</label><input type="file" class="form-control" name="featured_image"></div>
<div class="mb-3"><label>Gallery</label><input type="file" class="form-control" name="gallery[]" multiple></div>
@push('scripts')<script>document.querySelectorAll('.editor').forEach((el)=>CKEDITOR.replace(el));</script>@endpush
