          <div class="row">
            <div class="col-lg-32">
              <div class="container">
                <section class="panel">
                  <header class="panel-heading">
                    Daftar Jenis Golongan
                  </header>

                  <div class="input-group input-group-lg hidden-xs" align="right">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th align="left"><a href="#formtambah" data-toggle="modal" class="btn btn-primary">Tambah Data</a></th>
                          <th><a href="#formimportexcel" data-toggle="modal" class="btn btn-success">Import Excel</a></th>
                          <th style="width: 600px;"></th>
                          <th align="right"><input type="text" id="myInput" placeholder="Search Data" style="width: 300px; height: 30px;"></th>
                        </tr>
                      </thead>
                    </table>
                  </div>

                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th> 
                        <th>Nomor Sales Order (SO)</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  
                    <tbody id="target">
              
                    </tbody>
                  </table>
                  <!--Modal Tambah -->
                  <div class="modal fade" id="formtambah" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h1>Data Jenis Golongan</h1>
                        </div>
                        <table class="table">
                          <center><font color="red"></font><p id="pesan"></p></center>
                          <tr>
                            <td>Nama Golongan</td>
                            <td><input type="text" name="nama_gol" placeholder="Nama Golongan" class="form-control" autocomplete="off" onkeyup="this.value = this.value.toUpperCase()" id="ng" value=""></td>
                          </tr>
                          <tr>
                            <td>Gaji Dasar Pokok</td>
                            <td><input type="text" name="gapok" placeholder="Gaji Pokok" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)" id="gp" value=""></td>
                          </tr>
                          <tr>
                            <td>
                              <button type="button" id="btn-tambah" class="btn btn-primary" onclick="tambahdata();">Tambah</button>
                              <!-- <button type="button" id="btn-ubah" class="btn btn-warning" onclick="ubahdata();">Ubah</button> -->
                              <button type="button" data-dismiss="modal" id="btn-batal" class="btn btn-danger">Batal</button>
                            </td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div><!--End Modal Tambah-->

                  <!-- Modal Edit -->
                  <div class="modal fade" id="formedit" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h1>Edit Data Golongan</h1>
                        </div>

                        <table class="table">
                          <center><font color="red"></font><p id="pesan"></p></center>
                          <tr>
                            <td><input type="hidden" name="idgolonganedit" id="idgolonganedit" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>Nama Golongan</td>
                            <td><input type="text" name="nama_goledit" id="nama_goledit" class="form-control" autocomplete="off" placeholder="Nama Golongan" onkeyup="this.value = this.value.toUpperCase()"></td>
                          </tr>
                          <tr>
                            <td>Gaji Dasar Pokok</td>
                            <td><input type="text" name="gapokedit" id="gapokedit" placeholder="Gaji Pokok" class="form-control" autocomplete="off" onkeypress="return hanyaAngka(event)"></td>
                          </tr>
                          <tr>
                            <td>
                              <button type="submit" id="btn_update" class="btn btn-warning">Update</button>
                              <!-- <button type="button" id="btn-ubah" class="btn btn-warning" onclick="ubahdata();">Ubah</button> -->
                              <button type="button" data-dismiss="modal" id="btn-batal" class="btn btn-danger">Batal</button>
                            </td>
                          </tr>
                        </table>

                      </div>
                    </div>
                  </div><!--End Modal Edit-->

                  <div class="modal fade" id="formhapus" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h1>Hapus Data Golongan</h1>
                          <div class="modal-body">
                            <h3><strong>Anda Yakin Ingin Menghapus Data ini ?</strong></h3>
                          </div>
                          <div class="modal-footer">
                            <input type="hidden" name="idgolonganhps" id="idgolonganhps" class="form-control">
                            <button type="submit" id="btn_hps" class="btn btn-danger">Yes</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="formimportexcel" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <h1>Form Import Data Excel</h1>
                          <div class="modal-body">
                            Import Excel
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </section>
              </div>
            </div>
          </div><!--/.row--><br><br>

          <script type="text/javascript">
            ambildata();
            function ambildata(){
              $.ajax({
                type:"POST",
                url:'<?php echo base_url('jnsgolongan/ambildata');?>',
                dataType:'JSON',
                success:function(data){
                  var baris = '';
                  var i;
                  for (var i = 0; i<data.length; i++) {
                    baris+=`<tr>
                              <td>`+(i+1)+`</td>
                              <td>`+data[i].nama_gol+`</td>
                              <td>`+data[i].gapok+`</td>
                              <td>
                                  <a href="#formedit" data-toggle="modal" class="btn btn-warning item_edit" data-idgolongan="`+data
                                  [i].idgolongan+`" data-nama_gol="`+data[i].nama_gol+`" data-gapok="`+data[i].gapok+`">Edit</a>
                                  <a class="btn btn-danger item_delete data-idgolongan="`+data[i].idgolongan+`">Hapus</a>
                            </tr>`
                  }
                  $('#target').html(baris);
                }
              });
              
              //view edit
              $('#target').on('click','.item_edit',function(){
                var idgolongan= $(this).data('idgolongan');
                var nama_gol  = $(this).data('nama_gol');
                var gapok     = $(this).data('gapok');
             
                $('#formedit').modal('show');
                $('[name="idgolonganedit"]').val(idgolongan);
                $('[name="nama_goledit"]').val(nama_gol);
                $('[name="gapokedit"]').val(gapok);
              });//end view edit

              //startt update
              $('#btn_update').on('click',function(){
                var idgolongan= $('#idgolonganedit').val();
                var nama_gol  = $('#nama_goledit').val();
                var gapok     = $('#gapokedit').val();

                $.ajax({
                  type : "POST",
                  url : "<?php echo base_url('jnsgolongan/update');?>",
                  dataType : "JSON",
                  data : {idgolongan:idgolongan, nama_gol:nama_gol, gapok:gapok},
                  success: function(data){
                    $('[name="idgolonganedit"]').val("");
                    $('[name="nama_goledit"]').val("");
                    $('[name="gapokedit"]').val("");
                    $('#formedit').modal('hide');
                    ambildata();
                  }
                });
                return false;
              });//end update

              //view hapus
              $('#target').on('click','.item_delete',function(){
                  var idgolongan = $(this).data('idgolongan');
             
                  $('#formhapus').modal('show');
                  $('[name="idgolonganhps"]').val(idgolongan);
              });//end view hapus

              //hapus record
              $('#btn_hps').on('click',function(){
                  var idgolongan = $('#idgolonganhps').val();
                  $.ajax({
                    type : "POST",
                    url  : "<?php echo site_url('jnsgolongan/delete')?>",
                    dataType : "JSON",
                    data : {idgolongan:idgolongan},
                    success: function(data){
                      $('[name="idgolonganhps"]').val("");
                      $('#formhapus').modal('hide');
                      ambildata();
                    }
                  });
                return false;
              });//end hapus record

              //Search Filter Table Jquery
              $("#myInput").on("keyup", function(){
                var value = $(this).val().toLowerCase();
                $("#target tr").filter(function(){
                  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
              });//end search
            }

            function tambahdata(){
              var nama_gol=$("[name='nama_gol']").val();
              var gapok=$("[name='gapok']").val();
              $.ajax({
                type:'POST',
                data:'nama_gol='+nama_gol+'&gapok='+gapok,
                url: '<?php echo base_url('jnsgolongan/tambahdata');?>',
                dataType: 'JSON',
                success:function(hasil){
                  ambildata();
                  hpsvalue();
                  $('#formtambah').modal("toggle");
                }
              });
            }

            function hanyaAngka(evt) {
              var charCode = (evt.which) ? evt.which : event.keyCode
              if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
                return true;
            }

            function hpsvalue(){
              document.getElementById("ng").value = "";
              document.getElementById("gp").value = "";
            }



            // function submit(x){
            //   if (x=='tambah') {
            //     $('#btn-tambah').show();
            //     $('#btn-ubah').hide();
            //   }else{
            //     $('#btn-tambah').hide();
            //     $('#btn-ubah').show();

            //     $.ajax({
            //       type:"POST",
            //       data:'idgolongan='+x,
            //       url: '<?php //echo base_url('jnsgolongan/ambilid');?>',
            //       dataType: 'JSON',
            //       success:function(hasil){
            //         $('[name="nama_gol"]').val(hasil[0].nama_gol);
            //         $('[name="gapok"]').val(hasil[0].gapok);
                    
            //       }
            //     });
            //   }
            // }

            // function simpanjnsgol(){
            //   xajax_simpanjnsgol(document.getElementById("nama_gol").value,document.getElementById("gapok").value);
            // }

            // $(document).ready(function(e){
            //   e.preventDefault();
            //   //simpan jnsgol
            //   $("#simpan").click(function(){
            //     $.ajax({
            //       url : "<?php //echo base_url('jnsgolongan/savedata');?>",
            //       type : "POST",
            //       data : $("#form_jnsgol").serialize(),
            //       success : function(data){
            //         $('#list_jnsgol').html(data);
            //       }
            //     });
            //     return false;
            //   });

            //   //list jnsgol
            //   $('#list_jnsgol').load("<?php //echo base_url('jnsgolongan/list_jnsgol');?>");

            //   //hapus jnsgol
            //   $(document).on('click','.hapus_jnsgol',function(){
            //     var row_id = $(this).attr("id");
            //     $.ajax({
            //       url : "<?php //echo base_url('jnsgolongan/hapus_jnsgol');?>",
            //       method : "POST",
            //       data : {row_id:row_id},
            //       success : function(data){
            //         $('#list_jnsgol').html(data);
            //       }
            //     });
            //   });

            // });
          </script>