@extends('layouts.master')

<h4 class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">
 bonjour mr/mde {{ session('client')->prenom }}
</h4>
@if (session('status'))
 <a href="{{ route('logout') }}" class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">{{ session('status') }}</a>
@endif

@section('content')

@foreach($products as $product)

    <div class="col-md-4">
      <div class="card text-center col-sm-11">
          <div class="imageoffre">
            <img class="card-img-top " src="{{ asset('pictures/'.$product->image) }}" alt="business"> 
          </div>
           <div class="card-body ">
            <div class="mb-1 text-body-secondary">{{ $product->created_at->format('d/m/Y') }}</div>
            <h4><em height="25px"><strong class="card-text mb-auto">Prix: {{ $product->getPrice() }}.</strong></em></h4>
              <a href="{{ route('product.show',$product->slug) }}" class="btn btn-primary ">
                Voir le produit
                <svg class="bi" height="20px" width="200px"><use xlink:href="#chevron-right"/></svg>
              </a>
           </div>
        </div>
    </div>


   @endforeach
    
@endsection

