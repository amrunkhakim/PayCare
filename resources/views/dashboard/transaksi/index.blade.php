@extends('layout/dash')

@section('container')
<div class="row mt-4"></div>
    <div class="card card-body mx-3 mx-md-4 ">
                <div class="col-md-5 mt-4">
                    <div class="card h-100 mb-4">
                      <div class="card-header pb-0 px-3">
                        <div class="row">
                          <div class="col-md-6">
                            <h6 class="mb-0">Riwayat Pembayaran</h6>
                            @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                             {{ session('success') }}
                              <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            @endif
                          </div>
                          <div class="col-md-6 d-flex justify-content-start justify-content-md-end align-items-center">
                           
                            <small></small>
                          </div>
                        </div>
                      </div>

                      <div class="card-body pt-3 p-3">
                        <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Detail</h6>
                        @foreach ($Transaksis as $transaksi )
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                <a href="/dashboard/transaksi/{{ $transaksi->id }}" class="btn btn-icon-only btn-rounded btn-outline-info mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">open_in_new</i></a>
                                <div class="d-flex flex-column">
                                  <h6 class="mb-1 text-dark text-sm">Rp. {{ $transaksi->gross_amount }}</h6>
                                  <span class="text-xs">{{ $transaksi->transaction_time }}</span>
                                </div>
                              </div>
                            
                                <?php if ($transaksi['transaction_status']=='200'){ ?>
                                    <b class="d-flex align-items-center text-success text-sm font-weight-bold text-gradient">Berhasil</b>
                                 <?php }else{ ?>
                                  <b class="d-flex align-items-center text-warning text-sm font-weight-bold text-gradient">Pending</b>
                                   
                                 <?php }?>
                                
                           
                            </li>
                          
                      
                        
                          </ul>   
                        @endforeach
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </p>
          </div>
        </div>
      
       
      
      
        
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
      