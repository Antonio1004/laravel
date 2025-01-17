@component("components.layout")
    <h1>Blog</h1>

    @session('status')
    <div class="alert alert-primary" role="alert">
        {{{session('status')}}}
      </div>
    @endsession
    @foreach ($posts as $post )
    <h4>

        <a href="/blog/{{$post->id}}">
            {{$post['title']}}
        </a>
    </h4>
    @endforeach
@endcomponent