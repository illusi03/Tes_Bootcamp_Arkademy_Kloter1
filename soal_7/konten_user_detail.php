<?php
include 'include/lib_fungsi.php';
if(isset($_POST['id'])){
    $idTemp = $_POST['id'];
    $data_user = getUserWhere($idTemp);
    $datas_hobby = getAllHobby();
?>

							<form action="proses_user_edit.php" method="POST">
                                <input type="hidden" name="id_user" value="<?php echo $idTemp ?>">
                                <div class="m-t-20">
                                    <h5><b>Name</b></h5>
                                    <input type="text" class="form-control" maxlength="100" name="name" id="alloptions" placeholder="Name" value="<?php echo $data_user['name'] ?>" required>
                                </div>
                                <div class="m-t-20">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5><b>Hobby</b></h5>
                                        </div>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="hobi">
                                                <optgroup label="Hobby Name -> [Category]">
                                                    <?php
                                                    foreach ($datas_hobby as $x) {
                                                    	if($data_user['id_hobby'] == $x['id']){
                                                    		echo "<option value='".$x['id']."' selected>";
                                                    	}else{
                                                    		echo "<option value='".$x['id']."'>";
                                                    	}
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

<?php
}
?>