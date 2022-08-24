@extends('_layouts.main')

@section('content-page')
  <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <article class="mb-5">
                  <h3 class="mb-0 text-info">{{ $post->title }}</h3>
                  <small>By {{ $post->author->name }} in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></small>
                  <div class="mt-2">
                    {!! $post->body !!}
                  </div>
              </article>

                <a href="/blog" class="text-secondary">Back</a>
            </div>
        </div>
    </div>
  </section>
@endsection