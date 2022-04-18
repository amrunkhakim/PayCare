@extends('layout/dash')

@section('container')
<div class="row mt-4">
<div class="card card-body mx-3 mx-md-4 ">

          <div class="card-body pt-3 p-3">
            <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Detail Akun</h6>
            <ul class="list-group">
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">account_circle</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Profile</h6>
                    <span class="text-xs"> {{ auth()->user()->username }}</span>
                  </div>
                </div>
               
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">lock_open</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Password</h6>
                    <span class="text-xs">*************</span>
                  </div>
                </div>
                <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                  Edit
                </div>
              </li>
             
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                    <form action="/logout" method="post">
                        @csrf
                  <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">logout</i></button>
                  </form>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">Keluar Akun</h6>
                 
                  </div>
                </div>
                <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                 
                </div>
              </li>
              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                <div class="d-flex align-items-center">
                  <button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 p-3 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-lg">help</i></button>
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark text-sm">help</h6>
                   
                  </div>
                </div>
                <div class="d-flex align-items-center text-dark text-sm font-weight-bold">
                 
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</p>
</div>
</div>






  @endsection
      