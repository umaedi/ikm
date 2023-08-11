@extends('layouts.app')
@section('content')
<div class="main-content container">
    <section class="section">
      <div class="section-header">
        <h1>{{ __("Responden") }}</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Responden</div>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
            <div class="section-body">
                <div class="row mb-3">
                    <div class="col-md-10 mb-3">
                        <input type="text" class="form-control" id="search" name="search" placeholder="Cari berdasarkan nama...">
                    </div>
                    <div class="col-md-2 mb-3">
                        <select class="form-control" id="perPage" name="pagination">
                            <option value="12">--PER PAGE--</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    {{-- <div class="col-md-2">
                        <a href="/admin/export?status=Semua_Pendaftar" class="form-control btn btn-primary">EXPORT</a>
                    </div> --}}
                  </div>
                  @include('layouts._loading')
                <div class="table-responsive" id="x-data-table">
                    
                </div>
              </div>
        </div>
      </div>
 
    </section>
</div>
@endsection
@push('js')
<script>

    var page = 1;
    var paginate = 10;
    var search = '';

    $(() => {
        loadTable();

        $('#search').on('keypress', function (e) {
            if (e.which == 13) {
                filterTable()
                return false;
            }
        });

        $("#perPage").change(function () {
            filterTable()
        });


        $('#refresh').click(function() {
            filterTable();
        });
        
    });

    function filterTable() {
        paginate = $('#perPage').val();
        search   = $('#search').val();
        loadTable()
    }

    async function loadTable() {
            var param = {
                method: 'GET',
                url: '{{ url()->current() }}',
                data: {
                    load: 'table',
                    search: search,
                    page: page,
                    paginate: paginate,
                }
            }
            loadingsubmit(true);
            await transAjax(param).then((result) => {
                loadingsubmit(false);
                $('#x-data-table').html(result)
          
            }).catch((err) => {
                loadingsubmit(false);
                console.log('error');
        });
    }

    function loadingsubmit(state){
        if(state) {
            $('#btn_loading').removeClass('d-none');
            $('#btn_login').addClass('d-none');
        }else {
            $('#btn_loading').addClass('d-none');
            $('#btn_login').removeClass('d-none');
        }
    }  

    function loadPaginate(to) {
        page = to
        filterTable()
    }

</script>
@endpush