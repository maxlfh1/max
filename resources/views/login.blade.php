@extends('layouts.master')


@section('content')

<div class="row justify-content-center">
  <div class="col-md-10 content-form">

      <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-black text-center" data-swiper-parallax="10">
        <span class="text-outline-dark">Connectez-vous à votre</span> Compte !
      </h2>


      <form action="/login/traitement" method="POST">
      @csrf
        <div class="row">
          <div class="col-md-11">
            <label  class="form-label"><em>Email:</em></label>
            <input type="email" class="form-control inp" style="border-radius: 30px"  placeholder="e-mail" name="email" required>
          
          </div>
        </div>
        <div class="row">
          <div class="col-md-11">
            <label class="form-label"><em>Password</em></label>
            <input type="password" class="form-control inp" style="border-radius: 30px"  placeholder="Mot de passe" name="password" required>
         
          </div>
        </div><br>
        
        <div class="row justify-content-between">
          <div class="col-md-4">
            <button type="submit" class="btn btn-success" style="border-radius: 20px" >Se Connecter</button>
          </div>
          
          <div class="col-md-4">
            <a href="/" >Je n'ai pas de compte</a>
          </div>
          
        </div>

      </form><br>

      @if (session('status'))
        <h4 class="tracking-wide fw-bold text-outline-dark text-uppercase text-center">{{ session('status') }}</h4>
      @endif
      

  </div>
</div>
    
@endsection

