


@extends('layouts.master')

@section('content')
@include('partials.caresoul')
  @foreach ($products as $product)

<div class="col-md-3">
    <div href="{{ route('products.show', $product->slug) }}" class="card card-product-grid">
        <a href="{{ route('products.show', $product->slug) }}" class="img-wrap"> <img src="{{ asset('storage/' . $product->image) }}"> </a>
        <figcaption class="info-wrap">

            <a href="{{ route('products.show', $product->slug) }}" class="title">{{ $product->title }}</a>

            <div class="rating-wrap">
                <span class="label-rating text-muted"> {{ $product->subtitle }} | </span>
                <span class="label-rating text-muted">  @foreach ($product->categories as $category)

                    <span class="badge badge-danger">
                    {{ $category->name }}{{ $loop->last ? '' : ', '}}
                </span>
                @endforeach</span>

            <div class="price mt-1 "><h4> {{ $product->getPrice() }}</h4></div>

        </div>
        </figcaption>
    </div>
</div>

@endforeach
{{ $products->appends(request()->input())->links() }}
@endsection

