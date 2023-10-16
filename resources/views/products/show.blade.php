@extends('layouts.master')


@section('content')

<div class="col-md-12">
  <div class="card text-center col-sm-12">
      <div class="imageoffre">
        <img class="card-img-top " src="{{ asset('pictures/'.$product->image) }}" alt="business"> 
      </div>
       <div class="card-body ">
        <div class="mb-1 text-body-secondary">{{ $product->created_at->format('d/m/Y') }}</div>
        <h3><em><strong class="card-text mb-auto">Prix: {{ $product->getPrice() }}.</strong></em></h3>
        <form action="{{ route('cart.store') }}" method="post">
          @csrf
          <input type="hidden" name="product_id" value="{{ $product->id }}">
          
          <button type="submit"  class="btn btn-primary" id="btn2">Ajouter au panier</button>
      </form>
       </div>
    </div>
</div>
    
@endsection