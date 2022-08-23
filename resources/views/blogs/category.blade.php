@extends('_layouts.main')

@section('content-page')
  <section>
    <div class="container">
        <h3 class="mb-4+">Post Category: {{ $category }}</h3>
        @foreach ($posts as $item)
            <article class="mb-5">
                <a href="/blog/{{ $item->slug }}" class="mb-0 text-info"><h3>{{ $item->title }}</h3></a>
                <p class="mt-2">{{ $item->excerpt }}</p>
            </article>

            <a href="/categories" class="text-secondary">Back</a>
        @endforeach
    </div>
  </section>
@endsection