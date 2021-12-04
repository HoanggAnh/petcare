
<div id="wrapper">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Thú nuôi</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Quản lý thú nuôi
            </div>
            <div class="col-sm-2" style="float: right">
                <a href="?mod=themThuNuoi" class="btn btn-success" id="btnthemThu"><i class="material-icons">&#xE147;</i> <span>Thêm thú nuôi</span></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>idThu</th>
                            <th>Tên thú</th>
                            <th>Giá thú</th>
                            <th>Mô tả</th>
                            <th>Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php include '../../connected.php';

                        $sql="SELECT * FROM thunuoi ORDER BY tenThu ASC";
                        $query=mysqli_query($link,$sql);

                        while ($row=mysqli_fetch_array($query)) {
                            $idThuNuoi = $row['idThu'];
                            ?>
                            <tr class="odd gradeX" id="<?php $row['idThu']; ?>">
                                <td class="center" id="<?php $row['idThu'];?>"><a href="javascript:view('<?php $row['idThu']; ?>');"> <?php echo $row['idThu']; ?></a></td>
                                <td><?php echo $row['tenThu']; ?></td>
                                <td><?php echo $row['giaThu']; ?></td>
                                <td style="width: 500px"><?php echo $row['moTaThuNuoi']; ?></td>
                                <td style="text-align: center; ">
                                    <a href="?mod=suaThuNuoi&&idThu=<?php echo $row['idThu'];?>" class="edit" id="editKH" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <a style="cursor: pointer" class="delete" onclick="confirmXoa(<?php echo $row['idThu']?>)" ><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>


                        <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>

<script src="../../public/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/event/dieuhuong.js" type="javascript"></script>

</div>

