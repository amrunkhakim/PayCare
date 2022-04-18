@extends('layout/dash')

@section('container')
<div class="row mt-4"></div>
    <div class="card card-body mx-3 mx-md-4 ">
                <div class="col-md-5 mt-4">
                    <div class="card h-100 ">
                      <div class="card-header pb-0 px-3">
                       
                        <h6 class="mb-0">Billing Information</h6>
                       
                        <ul class="list-group">
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                <a href="" class="btn btn-icon-only btn-rounded btn-outline-info mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">print</i></a>
                                
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
                            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                              <div class="d-flex align-items-center">
                                <a href="{{ $transaksi->pdf_url}}" class="btn btn-icon-only btn-rounded btn-outline-info mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">pending_actions</i></a>
                                <div class="d-flex flex-column">
                                    <h6 class="mb-1 text-dark text-sm">Cara Pembayaran</h6>
        
                           
                            </li>
                          
                      
                        
                          </ul>   
                
                        
                      </div>

  <hr>
                  <div class="row ">
                        <div class="card-body ">
                          <ul class="list-group">
                            <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                              <div class="d-flex flex-column">
                                  
                                <h6 class="mb-1 text-sm">Detail</h6>
                                <span class="mb-2 text-xs">Jumlah : <span class="text-dark font-weight-bold ms-sm-2">Rp. {{ $transaksi->gross_amount }}</span></span>
                                <span class="mb-2 text-xs">Metode : <span class="text-dark font-weight-bold ms-sm-2">{{ $transaksi->payment_type }}</span></span>
                                <span class="mb-2 text-xs">BANK: <span class="text-dark ms-sm-2 font-weight-bold">{{ $transaksi->bank }}</span></span>
                                <span class="text-xs">VA Number: <span class="text-dark ms-sm-2 font-weight-bold">{{ $transaksi->va_number }}</span></span>
                                
                                
                              </div>
                          
                              
                         
                            </li>
                           
                          </ul>
                  
      
        <hr>
          </div>
        </div>
          </div>
        </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
      