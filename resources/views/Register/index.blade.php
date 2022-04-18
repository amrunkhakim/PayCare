@extends('layout/registerasi')

@section('container')

<div class="row">
    <div class="col-lg-4 col-md-8 col-12 mx-auto">
      <div class="card z-index-0 fadeIn3 fadeInBottom">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
            <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">REGISTRASI</h4>
            <div class="row mt-3">
      
            </div>
          </div>
        </div>
        <div class="card-body">
          <form action="/register" method="post" role="form"  class="text-start">
            @csrf
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" id="name" name="name"  class="form-control @error('name')
              is-invalid
            @enderror" required value="{{ old('name') }}">
            @error('name')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Username</label>
              <input type="text" id="username" name="username" class="form-control @error('username')
              is-invalid
            @enderror" required value="{{ old('username') }}"> 
              @error('username')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
            </div>
            <div class="input-group input-group-outline my-3">
              <label class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control @error('email')
              is-invalid
            @enderror" required value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
               {{ $message }}
              </div>
            @enderror
            </div>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control @error('password')
              is-invalid
            @enderror" required>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            </div>
            <input type="hidden" name="role_id" id="role_id" value="2">
            <input type="hidden" name="image" id="image" value="default.jpg">
            
          
           
            <div class="text-center">
              <button type="submit" class="btn bg-gradient-success w-100 my-4 mb-2">Registarasi</button>
            </div>
           
          </form>
        </div>
      </div>
    </div>
  </div>

        
@endsection