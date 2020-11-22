<div class="row">
            <div class="col-lg-32">
              <div class="container">
                <section class="panel">
                  <header class="panel-heading">
                    Daftar Jenis Jabatan
                  </header>

                  <div class="input-group input-group-lg hidden-xs" align="right">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th align="left"><a href="#formtambah" data-toggle="modal" class="btn btn-primary">Tambah Data</a></th>
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
                        <th>Nama Jabatan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  
                    <tbody id="isidatajab">
              
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
                          <h1>Data Jenis Jabatan</h1>
                        </div>
                        <table class="table">
                          <center><font color="red"></font><p id="pesan"></p></center>
                          <tr>
                            <td>Nama Jabatan</td>
                            <td><input type="text" name="nama_gol" placeholder="Nama Jabatan" class="form-control" autocomplete="off" onkeyup="this.value = this.value.toUpperCase()" id="ng" value=""></td>
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
                </section>
              </div>
            </div>
          </div><!--/.row--><br><br>

          <script type="text/javascript">
            ambildata();
            function ambildata(){
              $.ajax({
                type:"POST",
                url:"<?php echo base_url('jnsjabatan/ambildata');?>",
                dataType:"JSON",
                // data:{namajabatan:namajabatan},
                success:function(data){
                  var baris = '';
                  var i
                  for (var i = 0; i<data.lenght; i++) {
                    baris+=`<tr>
                              <td>`+(i+1)+`</td>
                              <td>`+data[i].namajabatan+`</td>
                              <td>
                                  <a href="#formedit" data-toggle="modal" class="btn btn-warning item_edit" data-idjabatan="`+data
                                  [i].idjabatan+`" data-nama_jabatan="`+data[i].namajabatan+`">Edit</a>
                                  <a class="btn btn-danger item_delete" data-idjabatan="`+data[i].idjabatan+`">Hapus</a>
                            </tr>`
                  }
                  $('#isidatajab').html(baris);
                }
              });
            }
          </script>