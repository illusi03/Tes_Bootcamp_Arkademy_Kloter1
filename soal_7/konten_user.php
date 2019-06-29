            <div class="container">
                <?php
                $datas_hobby = getAllHobby();
                ?>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">User</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">

                        <div class="card-box table-responsive">
                            <h4 class="header-title m-t-10 m-b-30">Tabel - List Data</h4>
                            <div class="m-t-10 m-b-30">
                               <button href='' data-toggle='modal' data-target='#anggotaImportModal' class="btn btn-secondary m-b-10"><span class="fa fa-plus"></span> Tambah Data</button>
                            </div>
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th width="25">No</th>
                                        <th>Name</th>
                                        <th>Hobby</th>
                                        <th>Category</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    $c = 1;
                                    foreach ($datas as $temp => $value) {
                                        $idnya = $value['id'];
                                        echo "<tr>";
                                        echo "<td>".$c."</td>";
                                        echo "<td>".$value['nama']."</td>";
                                        echo "<td>".$value['hobi']."</td>";
                                        echo "<td>".$value['kategori']."</td>";
                                        echo "<td align='center'>";
                                        echo "<span data-toggle='modal' data-target='#myModal' class='detail-anggota' data-id='$idnya' onClick='showAjaxModal();'><button href='' class='btn btn-primary' data-toggle='tooltip' data-placement='top' data-original-title='Edit Data'><span class='fa fa-edit'></span> </button></span> ";
                                        echo "<a href='index.php?aksi=hapus&id=".$value['id']."' class='confirm-delete btn btn-danger' data-toggle='tooltip' data-placement='top' title='Hapus Data'>
                                            <span class='fa fa-close'></span>
                                        </a> ";
                                        echo "</td>";
                                        echo "</tr>";
                                        $c++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                
                <?php
                include 'footer.php';
                ?>
            </div>


            <!-- Untuk Modal URL Loader -->
            <!-- MODAL UNTUK EDIT DATA -->
            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                            <!-- Konten Di Include lewat AJAX -->

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
                

            <!-- sample modal content -->
            <!-- MODAL TAMBAH DATA -->
            <div id="anggotaImportModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Tambah Data User</h4>
                        </div>
                        <div class="modal-body-import">
                            <form action="proses_user_tambah.php" method="POST">
                                <div class="m-t-20">
                                    <h5><b>Name</b></h5>
                                    <input type="text" class="form-control" maxlength="100" name="name" id="alloptions" placeholder="Name" required>
                                </div>
                                <div class="m-t-20">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5><b>Hobby</b></h5>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control select2" name="hobi">
                                                <optgroup label="Hobby Name -> [Category]">
                                                    <?php
                                                    foreach ($datas_hobby as $x) {
                                                        echo "<option value='".$x['id']."'>";
                                                        echo $x['name']." -> [".$x['kategori']."]";
                                                        echo "</option>";
                                                    }
                                                    ?>
                                                </optgroup>
                                            </select>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href='page_hobi.php' class='btn btn-success' data-toggle='tooltip' data-placement='top' data-original-title='Tambah Hobi'><span class='fa fa-plus'></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20">
                                    <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->