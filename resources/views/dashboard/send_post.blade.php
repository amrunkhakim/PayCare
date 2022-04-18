@extends('layout/dash')

@section('container')

<div class="row mt-4"></div>
    <div class="card mb-7 card-body mx-3 mx-md-4 ">
      <div class="row gx-7 mb-2">
        
         
        </div>
        <div class="card-body p-3">
          <div class="col-lg">
            <body>
              <p>Segera Selesaikan Pembayaran sebelum habis batas Pembayaran </p>
           <button class="btn bg-gradient-success" id="pay-button"><i class="material-icons nav-link-text">schedule_send</i> Selesaikan Bayar!</button>
           <a href="/dashboard/send">
           <button class="btn bg-gradient-danger" ><i class="material-icons nav-link-text">remove_circle</i> Batal</button></a>
            
           <form action="" id="submit_form" method="POST">
              @csrf
              <input type="hidden"  name="json" id="json_callback">

             </form>

             


              <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                  // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                  window.snap.pay('{{ $snap_token }}', {
                    onSuccess: function(result){
                      /* You may add your own implementation here */
                    console.log(result);
                      send_response_to_form(result);
                    },
                    onPending: function(result){
                      /* You may add your own implementation here */
                     console.log(result);
                      send_response_to_form(result);
                    },
                    onError: function(result){
                      /* You may add your own implementation here */
                      console.log(result);
                      send_response_to_form(result);
                    },
                    onClose: function(){
                      /* You may add your own implementation here */
                      alert('Yakin Akan meninggalkan Proses Pembayaran ?');
                    }
                  })
                });

                function send_response_to_form(result){
                  document.getElementById('json_callback').value = JSON.stringify(result);
                  $('#submit_form').submit();
                }
              </script>
          </div>
         
        
          </div>
        </div>
      </div>
     
    </div>
  </div>
  
  

    
  @endsection
      
