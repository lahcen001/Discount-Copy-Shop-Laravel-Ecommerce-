@extends('layouts.master')

@section('content')
  @foreach ($products as $product)
    {{-- <div class="col-md-6">
      <div class="row no-gutters border rounded d-flex align-items-center flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <small class="d-inline-block text-info mb-2">
            @foreach ($product->categories as $category)
                {{ $category->name }}{{ $loop->last ? '' : ', '}}
            @endforeach
          </small>
          <h5 class="mb-0">{{ $product->title }}</h5>
          <p class="mb-3 text-muted">{{ $product->subtitle }}</p>
          <strong class="display-4 mb-4 text-secondary">{{ $product->getPrice() }}</strong>
          <a href="{{ route('products.show', $product->slug) }}" class="stretched-link btn btn-info"><i class="fa fa-location-arrow" aria-hidden="true"></i> Consulter le produit</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="{{ asset('storage/' . $product->image) }}" alt="">
        </div>
      </div>
    </div> --}}


<div class="col-md-3 mt-5">
    <div href="{{ route('products.show', $product->slug) }}" class="card card-product-grid">
        <a href="#" class="img-wrap"> <img src="{{ asset('storage/' . $product->image) }}"> </a>
        <figcaption class="info-wrap">

            <a href="{{ route('products.show', $product->slug) }}" class="title">{{ $product->title }}</a>

            <div class="rating-wrap">
                <span class="label-rating text-muted"> {{ $product->subtitle }} | </span>
                <span class="label-rating text-muted">  @foreach ($product->categories as $category)
                    {{ $category->name }}{{ $loop->last ? '' : ', '}}
                @endforeach</span>

            <div class="price mt-1 "><h4> {{ $product->getPrice() }}</h4></div>


        </div>
        </figcaption>
    </div>
</div>
  @endforeach
  {{ $products->appends(request()->input())->links() }}
@endsection
