@extends('layout/login')

@section('container')

<div class="row">
  
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
      <div class="card z-index-0 fadeIn3 fadeInBottom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
           
            
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">LOGIN</h4>
            
            <div class="row mt-3">
             
            </div>
          </div>
        </div>
        <div class="card-body">
          @if (session()->has('success'))
          <div class="alert alert-success alert-dismissible text-white" role="alert">
           {{ session('success') }}
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          @if (session()->has('LoginError'))
          <div class="alert alert-danger alert-dismissible text-white" role="alert">
           {{ session('LoginError') }}
            <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @endif
          <form action="/login" method="post" role="form" class="text-start">
            @csrf
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control @error('email')
                is-invalid
              @enderror" autofocus required value="{{ old('email') }}">
              @error('email')
               <div class="invalid-feedback">
                 {{ $message }}
               </div>

              @enderror
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" required>
            </div>
           
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">LOGIN</button>
            </div>
           
          </form>
        </div>
      </div>
    </div>
  </div>
        
@endsection