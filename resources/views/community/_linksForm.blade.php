<div class="col-md-4">
    <h3>Contribute a Link</h3>
    <form method="POST" action="/community">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" value="{{old('title')}}" name="title"
                   placeholder="what is the title of your link"
                   required
                   class="form-control"
                   id="title">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="text"
                   required
                   value="{{old('link')}}" class="form-control" name="link" id="link"
                   placeholder="what is the url">
            @error('link')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
