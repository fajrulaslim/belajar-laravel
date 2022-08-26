@extends('_layouts.main')

@section('content-page')
  <section>
    <div class="container">
      <h2 class="mb-3">{{ $heading }}</h2>
        @foreach ($posts as $item)
            <article class="mb-5 pb-4 border-bottom">
                <a href="/blog/{{ $item->slug }}" class="mb-0 text-info text-decoration-none"><h3>{{ $item->title }}</h3></a>
                <small>By <a href="/author/{{ $item->author->username }}" class="text-decoration-none">{{ $item->author->name }}</a> in <a href="/categories/{{ $item->category->slug }}" class="text-decoration-none">{{ $item->category->name }}</a></small>
                <p class="mt-2">{{ $item->excerpt }}</p>
                <a href="/blog/{{ $item->slug }}" class="mb-0 text-decoration-none">Read more...</a>
            </article>
        @endforeach
    </div>
  </section>
@endsection