@extends('layouts.master')


@section('content')

<div class="row justify-content-center">
  <div class="col-md-10 content-form">

      <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-black text-center" data-swiper-parallax="10">
        <span class="text-outline-dark">Inscrivez-vous à Boy's</span> Fashion</h2>


      <form action="/register/traitement" method="POST">

      @csrf
        
          <div class="col">
            <label for="inputText" class="form-label"><em>Nom</em></label>
            <input type="text" class="form-control inp" style="border-radius: 30px" placeholder="Nom" id="nom" name="nom" required>
            <h6 id="R"></h6>
        </div>

        <div class="col">
            <label for="inputText" class="form-label"><em>Prenom</em></label>
            <input type="text" class="form-control inp" style="border-radius: 30px" placeholder="Prenom" id=prenom name="prenom" required>
            <h6 id="T"></h6>
        </div>
        
        <div class="row">
  
          <div class="col-md-12">
            <label  class="form-label"><em>Email</em></label>
            <input type="email" class="form-control inp" style="border-radius: 30px" id="inputEmail4" placeholder="tonmail@gmail.com" name="email" required>
            
          </div>
          
        </div>
  
          <div class="row">
            <div class="col-md-12">
              <label  class="form-label"><em>Password</em></label>
              <input type="password" class="form-control inp" style="border-radius: 30px" id="inputEmail4" placeholder="Mot de passe" name="password" required>
            </div>
          </div><br>
          
          <div class="row">
            <div class="col-md-6">
              <button type="submit" class="btn btn-success" style="border-radius: 20px" >S'inscrire</button>
            </div>
            
            <div class="col-md-6">
            <button class="btn btn-primary" style="border-radius: 20px">
            <a href="{{ route('login') }}" class="text-white">Déja un compte ? Se connecter</a>
            </button>
              
            </div>
            
          </div>
      </form><br>

      @if (session('status'))
        <h4 class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">{{ session('status') }}</h4>
      @endif
      

  </div>
</div>
    
@endsection

