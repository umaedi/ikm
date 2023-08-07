<?php $this->load->view('navbar_login'); ?>
<style>
    .fixed-bg {
        /* The background image */
        background-image: url("<?php echo base_url('assets/images/web/MPP2.jpg'); ?>");
        /* Set a specified height, or the minimum height for the background image */
        //min-height: 500px;
        /* Set background image to fixed (don't scroll along with the page) */
        background-attachment: fixed;
        /* Center the background image */
        background-position: center;
        /* Set the background image to no repeat */
        background-repeat: no-repeat;
        /* Scale the background image to be as large as possible */
        background-size: cover;

    }
</style>
<script>
    Noty.overrideDefaults({
        theme: 'limitless',
        layout: 'topRight',
        type: 'alert',
        timeout: 2500
    });

    function e(type, text) {
        new Noty({
            text: text,
            type: type,
            modal: true
        }).show();
        signOut()
    }
</script>
<!-- Page content -->
<div class="page-content fixed-bg">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center" ng-app="login">

            <!-- Login card -->
            <form class="login-form form-validate" ng-controller="LoginController" ng-submit="sendForm()">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3"><br>
                            <img width="90%" src="<?php echo base_url('assets/images/web/' . $meta['logo']); ?>" alt="">

                            <h5 class="mb-0 h2 text-success"> <br></h5>
                            <span class="d-block text-muted">login to Your credentials</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="text" class="form-control" name="username" ng-model="data.username" placeholder="Username" required>
                            <div class="form-control-feedback">
                                <i class="icon-user text-orange-800"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control" ng-model="data.password" name="password" placeholder="Password" required>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-orange-800"></i>
                            </div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn bg-danger btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>


                        <span class="form-text text-center text-muted">By continuing, you're confirming that you've read our <a href="<?php echo base_url('root/terms'); ?>">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a>
                            <small class="mt-2"><br>Developed &amp; Designed by: <a href="http://facebook.com/dye.ard" target="_blank">Andrastuff</a></small>
                        </span>
                    </div>
                </div>
            </form>
            <!-- /login card -->

        </div>
        <!-- /content area -->
    </div>
    <!-- /main content -->

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">INDEX KEPUASAN MASYARAKAT</h5>
            </div>
            <div class="modal-body">
                <form id="store">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="no_tlp">No Tlp</label>
                        <input type="number" class="form-control" id="no_tlp" name="no_tlp">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="l">Laki-Laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pendidikan">Pendidikan</label>
                        <select class="form-control" id="pendidikan" name="pendidikan">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                            <option value="s1">S1</option>
                            <option value="s2">S2</option>
                            <option value="s3">S3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                            <option value="pns">PNS</option>
                            <option value="tni">TNI</option>
                            <option value="polri">POLRI</option>
                            <option value="swasta">SWASTA</option>
                            <option value="wirausaha">WIRAUSAHA</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <h3>PENDAPAT RESPONDEN TENTANG LAYANAN PUBLIK</h3>
                    <div class="form-group">
                        <label for="1">Bagaimana pendapat anda terhadap tampilan website tulangbawangkab.go.id ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="40" checked>
                            <label class="form-check-label" for="soal_1">
                                A Tidak Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="60" checked>
                            <label class="form-check-label" for="soal_1">
                                B Kurang Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="80" checked>
                            <label class="form-check-label" for="soal_1">
                                C Menarik
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_1" id="soal_1" value="100" checked>
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
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="40" checked>
                            <label class="form-check-label" for="soal_2">
                                A Tidak Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="60" checked>
                            <label class="form-check-label" for="soal_2">
                                B Kurang Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="80" checked>
                            <label class="form-check-label" for="soal_2">
                                C Tepat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_2" id="soal_2" value="100" checked>
                            <label class="form-check-label" for="soal_2">
                                D Sangat Tepat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="3">Apakah website tulangbawangkab.go.id mudah diakses ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="40" checked>
                            <label class="form-check-label" for="soal_3">
                                A Tidak Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="60" checked>
                            <label class="form-check-label" for="soal_3">
                                B Kurang Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="80" checked>
                            <label class="form-check-label" for="soal_3">
                                C Mudah
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_3" id="soal_3" value="100" checked>
                            <label class="form-check-label" for="soal_3">
                                D Sangat Mudah
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="4">Apakah website tulangbawangkab.go.id memberikan informasi yang bermanfaat?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="40" checked>
                            <label class="form-check-label" for="soal_4">
                                A Tidak Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="60" checked>
                            <label class="form-check-label" for="soal_4">
                                B Kurang Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="80" checked>
                            <label class="form-check-label" for="soal_4">
                                C Bermanfaat
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_4" id="soal_4" value="100" checked>
                            <label class="form-check-label" for="soal_4">
                                D Sangat Bermanfaat
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="5">Apakah website tulangbawangkab.go.id memberikan informasi yang terpercaya?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="40" checked>
                            <label class="form-check-label" for="soal_5">
                                A Tidak Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="60" checked>
                            <label class="form-check-label" for="soal_5">
                                B Kurang Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="80" checked>
                            <label class="form-check-label" for="soal_5">
                                C Terpercaya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_5" id="soal_5" value="100" checked>
                            <label class="form-check-label" for="soal_5">
                                D Sangat Terpercaya
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="6">Apakah akses informasi pada setiap halaman website tulangbawangkab.go.id telah terjamin ?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="40" checked>
                            <label class="form-check-label" for="soal_6">
                                A Tidak Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="60" checked>
                            <label class="form-check-label" for="soal_6">
                                B Kurang Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="80" checked>
                            <label class="form-check-label" for="soal_6">
                                C Beragam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_6" id="soal_6" value="100" checked>
                            <label class="form-check-label" for="soal_6">
                                D Sangat Beragam
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="7">Apakah website tulangbawangkab.go.id berisikan sejarah Tulang Bawang?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="40" checked>
                            <label class="form-check-label" for="soal_7">
                                A Tidak
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="60" checked>
                            <label class="form-check-label" for="soal_7">
                                B Kurang
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="80" checked>
                            <label class="form-check-label" for="soal_7">
                                C Iya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_7" value="100" checked>
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
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="40">
                            <label class="form-check-label" for="soal_8">
                                A Tidak Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="60">
                            <label class="form-check-label" for="soal_8">
                                B Kurang Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_8" id="soal_8" value="80">
                            <label class="form-check-label" for="soal_8">
                                C Menginformasikan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_7" id="soal_8" value="100" checked>
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
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="40" checked>
                            <label class="form-check-label" for="soal_9">
                                A Tidak Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="60" checked>
                            <label class="form-check-label" for="soal_9">
                                B Kurang Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="80" checked>
                            <label class="form-check-label" for="soal_8">
                                C Memuaskan
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_9" id="soal_9" value="100" checked>
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
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="40" checked>
                            <label class="form-check-label" for="soal_10">
                                A Tidak Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="60" checked>
                            <label class="form-check-label" for="soal_10">
                                B Kurang Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="80" checked>
                            <label class="form-check-label" for="soal_8">
                                C Responsif
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="soal_10" id="soal_10" value="100" checked>
                            <label class="form-check-label" for="soal_10">
                                D Sangat Responsif
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Apa kritik dan saran anda untuk website tulangbawangkab.go.id ?
                        </label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<script type="text/javascript">
    $(document).ready(function() {
        const ikm = localStorage.getItem("ikm");
        if (ikm !== 'yes') {
            $('#exampleModalCenter').modal('show');
        }
    });
</script>
<script src="<?php echo base_url('assets/admin'); ?>/core/angular.min.js"></script>
<script>
    var app = angular.module('login', []);

    app.controller("LoginController", function($scope, $http) {
        $scope.sendForm = function() {
            $http({
                method: "POST",
                data: $scope.data,
                url: ServUrl + "admin/auth/login"
            }).then(function mySuccess(response) {

                if (response.status == 203) {
                    new Noty({
                        text: response.data.status,
                        type: 'warning',
                        modal: true
                    }).show();
                } else {
                    window.location.reload();
                }
            }, function myError(response) {
                e('info', '401 server conection error');
            });
        };

        $('#store').submit(function(e) {
            e.preventDefault();
            $('#exampleModalCenter').modal('hide');

            var form = $(this)[0];
            var data = new FormData(form);

            $.ajax({
                'url': '/api/ikmkominfo/store',
                'type': 'POST',
                'data': data,
                'processData': false,
                'contentType': false,
                'cache': false,
                success(res) {
                    console.log(res);
                    localStorage.setItem('ikm', 'yes');
                },
                error(err) {
                    console.log(err)
                }
            });
        });
    });
</script>