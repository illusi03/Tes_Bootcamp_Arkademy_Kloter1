            <div class="container">
                <?php    
                $datas = getAllKategori();
                $datas_kategori = getAllKategori();
                $dtEdit = NULL;
                if(isset($_POST['btnSubmitTambah'])){
                	$bisa = addKategori($_POST['name']);
                	if($bisa){
                		rdt("page_kategori.php");
                	}
                }else if(isset($_POST['btnSubmitEdit'])){
                    $idNya = $_POST['id_kategori'];
                    $bisa = editKategori($idNya,$_POST['name']);
                    if($bisa){
                        rdt("page_kategori.php");
                    }
                }
                if(isset($_GET['id'])){
                	$id = $_GET['id'];
                	$dtEdit = getWhere("kategori","id",$id);
                }
                ?>
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Data Kategori</h4>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">
                        <div class="card-box table-responsive">
                        	<?php
                        	if(!isset($_GET['aksi'])){
                        	?>
                        	<!-- Jika Tambah -->
                        	<h3>
                        		<span class="label label-primary">
                        			<font color='black'>Tambah Data</font>
                        		</span>
                        	</h3>
                        	<form method="POST" action="">
                        		<div class="m-t-20">
	                                <h5><b>Nama Kategori</b></h5>
	                                <input type="text" class="form-control" maxlength="100" name="name" id="alloptions" placeholder="Nama Kategori" required>
	                            </div>
                                
	                            <div class="m-t-20">
	                                <input type="submit" name="btnSubmitTambah" value="Submit" class="btn btn-primary">
	                            </div>
                        	</form>
                        	<?php
                        	}else{
                        	?>
                        	<!-- Jika Ubah -->
                        	<h2>
                        		<span class="label label-success">
                        			<font color='black'>Ubah Data</font>
                        		</span>
                        	</h2>
                        	<form method="POST" action="">
                                <input type="hidden" name="id_kategori" value="<?php echo $dtEdit['id'] ?>">
                                <div class="m-t-20">
                                    <h5><b>Nama Kategori</b></h5>
                                    <input type="text" class="form-control" maxlength="100" name="name" id="alloptions" placeholder="Nama Kategori" value="<?php echo $dtEdit['name'] ?>" required>
                                </div>
                                
                                <div class="m-t-20">
                                    <input type="submit" name="btnSubmitEdit" value="Submit" class="btn btn-primary">
                                    <a href='page_hobi.php' class="btn btn-danger">Batal</a>
                                </div>
                            </form>
                        	<?php
                        	}
                        	?>
                        </div>
                    </div><!-- end col -->
                    <div class="col-sm-8">
                        <div class="card-box table-responsive">

                        	<!-- Jika Gagal Menambah Data -->
							<table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php
                                	foreach ($datas as $key => $value) {
                                		$kode = $value['id'];
                                		echo "<tr>";
                                		echo "<td>".$value['id']."</td>";
                                		echo "<td>".$value['name']."</td>";
                                		echo "<td class='text-center'>";
                                		echo "<a href='page_kategori.php?aksi=edit&id=$kode' class='btn btn-success' data-toggle='tooltip' data-placement='top' data-original-title='Ubah'><span class='fa fa-edit'></span></a> ";
                                		echo "<a href='page_kategori.php?aksi=delete&id=$kode' class='confirm-delete btn btn-danger waves-effect waves-light' data-toggle='tooltip' data-placement='top' data-original-title='Hapus' data-id='$kode'><span class='fa fa-trash-o'></span></a>";
                                		echo "</td>";
                                		echo "</tr>";
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