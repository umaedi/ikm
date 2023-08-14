@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="card-body">
                  <img id="imgPreview" src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->img) }}" loading="lazy" alt="photo" width="100%" >
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
                        <input type="file" class="form-control" accept=".png, .jpg, .jpeg" name="img" onchange="previewImage()"  id="image"> 
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

@endsection
@push('js')
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

    function previewImage()
    {
        const imgPreview = document.querySelector('#imgPreview');
        const image = document.querySelector('#image');
        const blob = URL.createObjectURL(image.files[0]);
        imgPreview.src = blob;
    }
</script>
@endpush