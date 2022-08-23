@extends('_layouts.main')

@section('content-page')
  <section>
    <div class="container">
        @foreach ($posts as $item)
            <article class="mb-5">
                <a href="/blog/{{ $item->slug }}" class="mb-0 text-info"><h3>{{ $item->title }}</h3></a>
                <p class="mt-2">{{ $item->excerpt }}</p>
            </article>
        @endforeach
    </div>
  </section>
@endsection