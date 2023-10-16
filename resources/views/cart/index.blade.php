@extends('layouts.master')

<h4 class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">
  bonjour mr/mde {{ session('client')->prenom }}
 </h4>
 @if (session('status'))
  <a href="{{ route('logout') }}" class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">{{ session('status') }}</a>
 @endif
 
@section('content')


@if (Cart::count() > 0)

<div class="px-4 px-lg-0">
    
  
    <div class="pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
  
            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Remove</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $product)

                    <tr>
                        <th scope="row">
                          <div class="p-2">
                            <img src="{{ asset('pictures/'.$product->image) }}" alt="" width="70" class="img-fluid rounded shadow-sm">
                            <div class="ml-3 d-inline-block align-middle">
                              <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">{{ $product->model->title }}</a></h5><span class="text-muted font-weight-normal font-italic">Category</span>
                            </div>
                          </div>
                          <td class="align-middle"><strong>{{ $product->model->getPrice() }}</strong></td>
                          <td class="align-middle"><strong></strong></td>
                          <td class="align-middle">
                            
                            <form action="{{ route('cart.destroy', $product->rowId) }}" method="post">
                            
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="text-dark"><i class="fa fa-trash"></i></button>
                            
                            </form>
                            
                          </td>
                      </tr>
                        
                    @endforeach
                  
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>
        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <div class="col-lg-12">
            <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Détails de la commande </div>
            <div class="p-4">
              <p class="font-italic mb-4">Les frais d'expédition et les frais supplémentaires sont calculés en fonction des valeurs que vous avez saisies.</p>
              <ul class="list-unstyled mb-4">
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted"> Sous-total </strong><strong>{{ getPrice(cart::subtotal()) }}</strong></li>
                
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Taxe</strong><strong>{{ getPrice(Cart::tax()) }}</strong></li>
                <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                  <h5 class="font-weight-bold text-success">{{ getPrice(Cart::total()) }}</h5>
                </li>
              </ul>

              <kkiapay-widget sandbox="true" amount= " {{ $total }} " key="3fc2eff0383b11eeb5772f8982b217ce" 
                    callback="#" />


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@else
    
<p><h1 class="text-danger"><em>Votre Panier est vide !</em></h1></p>

@endif
    
@endsection


@section('extra-js')

<script src="https://cdn.kkiapay.me/k.js"></script>
    
@endsection