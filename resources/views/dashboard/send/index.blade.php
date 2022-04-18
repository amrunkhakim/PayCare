@extends('layout/dash')

@section('container')

<div class="row mt-4"></div>
    <div class="card mb-7 card-body mx-3 mx-md-4 ">
      <div class="row gx-7 mb-2">
        
         
        </div>
        <div class="card-body p-3">
          <h6 class="text-uppercase text-body text-xs font-weight-bolder">Pilih Pembayaran</h6>
         
          <div class="col-lg">
            <form  method="GET" action="/dashboard/send_post" >
              @csrf
              <div class="input-group input-group-outline my-3">
               
            <select id="nama" class="form-control" name="nama" required>
              <option value="SPI">SPI</option>
              <option value="Semester">Semester</option>
              <option value="Tugas Akhir">Tugas Akhir</option>
              <option value="UAS">UAS</option>
              <option value="UTS">UTS</option>
            </select>
              </div>
              <div class="input-group input-group-outline my-3">
                <input type="number" class="form-control" id="gross_ammout" name="gross_ammout" placeholder="Jumlah Pembayaran" required>
               <small><span class="text-danger">* Penulisan Jumlah Pembayaran Hanya angka tanpa tanda baca "./," ex: 1000000</span></small> 
              </div>
              
            <button  type="submit" class="btn bg-gradient-success  "><i class="material-icons nav-link-text">send</i> Send </button>
          </form>
          </div>
         
         
          </div>
        </div>
      </div>
     
    </div>
  </div>
  
  

    
  @endsection
      
