@csrf
<div class="md-form">
  <label for="">title</label>
  <input type="text" name="title" class="form-control" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-group">
  <article-tags-input
    :initial-tags='@json($tagNames ?? [])'
  >
  </article-tags-input>
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required rows="16" class="form-control" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>
