@extends('layout/dash')

@section('container')

<div class="row mt-4"></div>
    <div class="card mb-7 card-body mx-3 mx-md-4 ">
      <div class="row gx-7 mb-2">
        
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible text-white" role="alert">
         {{ session('success') }}
          <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        </div>

        <div class="col-xl-6">
          <div class="row">
            <div class="col-md-6 col-6">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape text-success icon-lg bg-gradient-dark shadow text-center border-radius-lg">
                    <i class="material-icons opacity-10">qr_code_scanner</i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Barcode</h6>
                  <span class="text-xs">E-wallet</span>

                </div>
              </div>
            </div>
            <div class="col-md-6 col-6">
              <a href="/dashboard/send/">
              <div class="card">
                <div class="card-header mx-4 p-3 text-center">
                  <div class="icon icon-shape icon-lg text-success bg-gradient-success shadow text-center border-radius-lg">
                    <i class="material-icons opacity-10">send</i>
                  </div>
                </div>
                <div class="card-body pt-0 p-3 text-center">
                  <h6 class="text-center mb-0">Bank</h6>
                  <span class="text-xs">Va Number</span>
    
                </div>
              </div>
            </a>
            </div>
          </div>
        </div>
        <button  id="pay-button" class="btn bg-gradient-success mt-3   float-end  "><i class="material-icons nav-link-text">account_balance</i> Pembayaran Lainnya </button>
       
      
      

 
        
          </div>
        </div>
      </div>
    </div>
    
  </div>
  
 
  @endsection
      
 