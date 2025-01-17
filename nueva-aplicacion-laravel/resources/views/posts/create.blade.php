<x-layout meta-title="Create new post" meta-description="Form to create a new post">
    <h1>Create new post</h1>
    <form method="POST" action="{{route('post.store')}}">
      @csrf
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title">
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control" name="body" id="body"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </x-layout>

