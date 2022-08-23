@extends('_layouts.main')

@section('content-page')
  <section>
    <div class="container">
        <ul>
            @foreach ($categories as $item)
                <li class="mb-3">
                    <a href="/categories/{{ $item->slug }}" class="mb-0 text-info"><h4>{{ $item->name }}</h4></a>
                </li>
            @endforeach
        </ul>
    </div>
  </section>
@endsection