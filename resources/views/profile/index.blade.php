@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
      </div>
      <div class="section-body">
        <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <img src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->img) }}" alt="photo" width="100%" >
                </div>
              </div>
            </div>
            <div class="col-md-9">
              <div class="card">
                <div class="card-body">
                <form id="update-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nip">Photo</label>
                        <input type="file" class="form-control image" id="photo" accept=".png, .jpg, .jpeg" name="img">
                        <input type="hidden" name="newimage" id="newImage">
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pegawai" value="{{ auth()->user()->name }}" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" value="{{ auth()->user()->email }}" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password baru</label>
                        <input type="password" class="form-control" id="pass" name="password">
                    </div>
                    @include('layouts._loading_submit')
                    <button type="submit" class="btn btn-primary x-btn ">SIMPAN PERUBAHAN</button>  
                </form>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Crop image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">  
                            <!--  default image where we will set the src via jquery-->
                            <img id="image">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop">Crop</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.2/lazysizes.min.js" async=""></script>
<script src="{{ asset('js') }}/sweetalert.min.js"></script>
<script type="text/javascript">
    $('#update-data').submit(async function update(e) {
        e.preventDefault();

        var form 	= $(this)[0]; 
        var _data 	= new FormData(form);

        var param = {
            method: 'POST',
            url: '/profile/update/{{ auth()->user()->id }}',
            data: _data,
            processData: false,
            contentType: false,
            cache: false,
        }

        loadingsubmit(true);
            await transAjax(param).then((res) => {
                loadingsubmit(false);
                swal({text: res.message, icon: 'success', timer: 3000,});
            }).catch((err) => {
                loadingsubmit(false);
                swal({text: err.responseJSON.message, icon: 'error', timer: 3000,}).then(() => {
                window.location.href = '/profile';
            });
        });

        function loadingsubmit(state){
            if(state) {
                $('#btn_loading').removeClass('d-none');
                $('.x-btn').addClass('d-none');
            }else {
                $('#btn_loading').addClass('d-none');
                $('.x-btn').removeClass('d-none');
            }
        }  
    }); 
</script>
@endpush