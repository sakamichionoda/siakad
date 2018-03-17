
<link href="<?php echo base_url()."assets" ?>/css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

<!-- Jasny -->
<script src="<?php echo base_url()."assets" ?>/js/plugins/jasny/jasny-bootstrap.min.js"></script>

  <!-- content -->
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-6">
                    <h2>Form Tanda Tangan Dosen</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">This is</a>
                        </li>
                        <li class="active">
                            <strong>Breadcrumb</strong>
                        </li>
                    </ol>
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal4"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content" id="item">
            <div class="row">
              <div class="ibox-content col-lg-12">
                <form class="form-horizontal">
                      <h2>Upload Tanda Tangan</h2>
                      <div class="hr-line-dashed"></div>
                      <!-- <div class="form-group">
                          <label class="col-lg-2 control-label">Form TTD:</label>
                          <canvas class="col-lg-6" id="signature-pad" width="500" height="100" style="border: 1px solid #ccc;"></canvas>
                      </div> -->
                      <div class="form-group">
                          <!-- <div class="col-lg-6"><input type="text" id="datepicker" class="form-control"></div> -->
                          <div class="col-lg-6 col-lg-offset-2">
                          <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
                            <span class="fileinput-filename"></span>

                          </div>

                            <span class="input-group-addon btn btn-default btn-file">
                                <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span>
                                <input placeholder="" type="file" name="..." accept="image/jpeg, image/png"/>
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                        <small style="color:red;">Silahkan upload file (.png)</small>
                          <small>atau belum punya tanda tangan? tanda tangan</small>
                          <a href="<?php echo base_url()."rektor/formttd/signature" ?>" target="_blank"> di sini</a>
                        </div>
                        <div class="col-lg-6 col-lg-offset-2">
                          <center><br>
                          <h6>Tanda tangan anda</h6>
                          <img src="<?php echo base_url()."assets" ?>/img/signature.svg" alt="ttd" style="width:250px;height:250px;">
                        </div>
                        </div><hr >
                <br >
                <center>
                  <button type="submit" class="btn btn-w-m btn-primary" name="button"><i class="fa fa-save"></i> Simpan</button>
                </center>
              </form>
              </div>
            </div> <br >
          </div>

          <script type="text/javascript">
          var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
            backgroundColor: 'rgba(255, 255, 255, 0)',
            penColor: 'rgb(0, 0, 0)'
            });
            var saveButton = document.getElementById('save');
            var cancelButton = document.getElementById('clear');

            saveButton.addEventListener('click', function (event) {
            var data = signaturePad.toDataURL('image/png');

            // Send data to server instead...
            window.open(data);
            });

            cancelButton.addEventListener('click', function (event) {
            signaturePad.clear();
            });
          </script>
