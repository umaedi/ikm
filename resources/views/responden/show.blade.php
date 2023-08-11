@extends('layouts.app')
@section('content')
<div class="main-content">
    <section class="section x-lampiran">
      <div class="section-header">
        <h1>{{ __('Detail Responden') }}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">{{ __('Dashboard') }}</a></div>
          <div class="breadcrumb-item">{{ __('Detail Responden') }}</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label for="nama_pegawai">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_pegawai" value="{{ $responden->nama }}">
            </div>
            <div class="form-group">
                <label for="no_tlp">Jenis Kelamin</label>
                @if ($responden->jenis_kelamin == 'L')
                <input type="text" class="form-control" id="no_tlp" value="Laki-Laki">
                @else
                <input type="text" class="form-control" id="no_tlp" value="Perempuan">
                @endif
            </div>
            <div class="form-group">
                <label for="no_tlp">No Tlp/WhatsApp</label>
                <input type="text" class="form-control" id="no_tlp" value="{{ $responden->no_tlp }}">
            </div>
            <div class="form-group">
                <label for="no_tlp">Pendidikan</label>
                <input type="text" class="form-control text-uppercase" id="no_tlp" value="{{ $responden->pendidikan }}">
            </div>
            <div class="form-group">
                <label for="no_tlp">Pekerjaan</label>
                <input type="text" class="form-control text-uppercase" id="no_tlp" value="{{ $responden->pekerjaan }}">
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>PENDAPAT RESPONDEN TENTANG LAYANAN PUBLIK</h6>
                    <div class="form-group">
                        <label for="1">Bagaimana pendapat anda terhadap tampilan website tulangbawangkab.go.id ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="40" {{ $responden->soal_1 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_1">
                                A Tidak Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="60" {{ $responden->soal_1 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_1">
                                B Kurang Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="80" {{ $responden->soal_1 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_1">
                                C Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="100" {{ $responden->soal_1 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_1">
                                D Sangat Menarik
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="2">Bagaimana menurut pendapat anda terhadap ketepatan waktu berita yang disajikan
                            website tulangbawangkab.go.id ?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="40" {{ $responden->soal_2 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_2">
                                A Tidak Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="60" {{ $responden->soal_2 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_2">
                                B Kurang Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="80" {{ $responden->soal_2 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_2">
                                C Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="100" {{ $responden->soal_2 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_2">
                                D Sangat Tepat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="3">Apakah website tulangbawangkab.go.id mudah diakses ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="40" {{ $responden->soal_3 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_3">
                                A Tidak Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="60" {{ $responden->soal_3 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_3">
                                B Kurang Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="80" {{ $responden->soal_3 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_3">
                                C Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="100" {{ $responden->soal_3 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_3">
                                D Sangat Mudah
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="4">Apakah website tulangbawangkab.go.id memberikan informasi yang bermanfaat?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="40" {{ $responden->soal_4 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_4">
                                A Tidak Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="60" {{ $responden->soal_4 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_4">
                                B Kurang Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="80" {{ $responden->soal_4 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_4">
                                C Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="100" {{ $responden->soal_4 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_4">
                                D Sangat Bermanfaat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="5">Apakah website tulangbawangkab.go.id memberikan informasi yang terpercaya?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="40" {{ $responden->soal_5 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_5">
                                A Tidak Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="60" {{ $responden->soal_5 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_5">
                                B Kurang Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="80" {{ $responden->soal_5 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_5">
                                C Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="100" {{ $responden->soal_5 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_5">
                                D Sangat Terpercaya
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="6">Apakah akses informasi pada setiap halaman website tulangbawangkab.go.id telah terjamin ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="40" {{ $responden->soal_6 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_6">
                                A Tidak Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="60" {{ $responden->soal_6 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_6">
                                B Kurang Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="80" {{ $responden->soal_6 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_6">
                                C Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="100" {{ $responden->soal_6 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_6">
                                D Sangat Beragam
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="7">Apakah website tulangbawangkab.go.id berisikan sejarah Tulang Bawang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="40" {{ $responden->soal_7 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_7">
                                A Tidak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="60" {{ $responden->soal_ == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_7">
                                B Kurang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="80" {{ $responden->soal_7 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_7">
                                C Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="100" {{ $responden->soal_7 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_7">
                                D Selalu
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="8">Apakah menurut anda website tulangbawangkab.go.id telah menginformasikan kearifan lokal dan
                            udang manis?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="40" {{ $responden->soal_8 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                A Tidak Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="60" {{ $responden->soal_8 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                B Kurang Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="80" {{ $responden->soal_8 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                C Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="100" {{ $responden->soal_8 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                D Selalu Menginformasikan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="9">Apakah website tulangbawangkab.go.id memberikan kemudahan dalam mengakses data
                            yang dibutuhkan?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="40" {{ $responden->soal_9 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_9">
                                A Tidak Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="60" {{ $responden->soal_9 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_9">
                                B Kurang Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="80" {{ $responden->soal_9 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                C Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="100" {{ $responden->soal_9 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_9">
                                D Sangat Memuaskan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="10">Bagaimana pendapat anda terhadap respon pengelola tulangbawangkab.go.id
                            terhadap saran dan kritik?
                        </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="40" {{ $responden->soal_10 == "40" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_10">
                                A Tidak Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="60" {{ $responden->soal_10 == "60" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_10">
                                B Kurang Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="80" {{ $responden->soal_10 == "80" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_8">
                                C Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="100" {{ $responden->soal_10 == "100" ? 'checked' : ''}}>
                            <label class="form-check-label" for="soal_10">
                                D Sangat Responsif
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Apa kritik dan saran anda untuk website tulangbawangkab.go.id ?
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="komentar">{{ $responden->komentar }}</textarea>
                    </div>
                </div>
            </div>
            <button class="btn btn-warning" onclick="destroy('{{ $responden->id }}')">HAPUS</button>
            </div>
        </div>
      </div>
    </section>
  </div>
@endsection
@push('js')
<script src="{{ asset('js') }}/sweetalert.min.js"></script>
    <script>
      function destroy(id) {
            swal({
              title: "",
              text: "Hapus data responden ini?",
              icon: "warning",
              buttons: true,
              })
              .then((willDelete) => {
              if (willDelete) {
                return new Promise(async function(resolve) {
                  var param = {
                          method: 'POST',
                          url: '/responden/destroy/'+id,
                      }

                await transAjax(param).then((res) => {
                        swal({text: res.message, icon: 'success', timer: 3000,}).then(() => {
                            window.location.href = '/responden';
                        });
                    }).catch((err) => {
                        swal({text: err.responseJSON.message, icon: 'error'});
                  });
                });
              }
          });
        }
    </script>
@endpush