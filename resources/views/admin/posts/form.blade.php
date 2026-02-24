<div class="mb-3"><label>Title</label><input class="form-control" name="title" value="{{ old('title',$post->title ?? '') }}"></div>
<div class="mb-3"><label>Slug</label><input class="form-control" name="slug" value="{{ old('slug',$post->slug ?? '') }}"></div>
<div class="mb-3"><label>Featured Image</label><input type="file" class="form-control" name="featured_image"></div>
<div class="mb-3"><label>Content</label><textarea class="form-control editor" name="content">{{ old('content',$post->content ?? '') }}</textarea></div>
@push('scripts')<script>document.querySelectorAll('.editor').forEach((el)=>CKEDITOR.replace(el));</script>@endpush
