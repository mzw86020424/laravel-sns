@csrf
<div class="md-form">
  <label for="">title</label>
  <input type="text" name="title" class="form-control" required value="{{ old('title') }}">
</div>
<div class="form-group">
  <label></label>
  <textarea name="body" required rows="16" class="form-control" placeholder="本文">{{ old('body') }}</textarea>
</div>