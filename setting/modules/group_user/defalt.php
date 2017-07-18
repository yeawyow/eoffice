<?PHP $Db->rule('admin_access', 'ข้อมูลผู้ใช้งาน', 'index'); ?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            จัดการกลุ่มผู้ใช้
        </h2>
    </div>
</div>


<div class="row">

    <div class="col-lg-12">
        <section class="panel">

            <div class="panel-body">
                <button class=" addBtn btn btn-drop btn-success">
                    เพิ่มกลุ่มผู้ใช้
                </button>
                <?PHP
          
                $sql = $Db->query('', 'group_user');
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">

                            <table class="display table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th><i class="fa fa-bullhorn"></i> ชื่อกลุ่ม </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?PHP   $i=1; foreach ($sql as $row) { 
                                      
                                        ?>
                                        <tr>
                                            <td></td>
                                            <td><a href="#"><?= $row['group_user_name'] ?></a></td>


                                           
                                            <td>



                                                <a  id="<?php echo $row['group_user_id']; ?>"  class=" editBtn btn btn-primary btn-xs">
                                                    <i class="fa fa-pencil"></i>
                                                </a> 
                                                <button id="<?PHP echo $row['group_user_id']; ?>"  class=" deleteBtn btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                            </td>
                                        </tr>
                                    <?PHP  $i++; } ?>
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
                <!-- end:basic table -->

                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Form เพิ่มกลุ่มผู้ใช้</h4>
                            </div>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <section class="panel">

                                            <div class="panel-body">
                                                <form class="form-horizontal tasi-form" action="" method="POST" name="myForm" id="myForm">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 col-sm-2 control-label">ชื่อกลุ่ม</label>
                                                        <div class="col-sm-10">
                                                            <input id="group_user_name"  name="group_user_name" type="text" class="form-control" 
                                                                   data-validation="required"
                                                                >
                                                            
                                                        </div>
                                                    </div>
                                                 
                                                    <input id="edit_group" name="edit_group" type="hidden">
                                                   
                                                    <div class="form-group">
                                                        <div class="col-lg-offset-2 col-lg-10">
                                                            <button type="submit" id="saveBtn" name="save" value="save"  class="  btn btn-success">บันทึก</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </section>

                </div>
            </div>



            <script type="text/javascript">
                $(document).ready(function () {
                           
          var t = $('.display').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw(); //เรียกใช้งาน datatable
 
      
                    $("#saveBtn").click(function () {
                        $.post('modules/group_user/add_group_user.php', {
                            edit_group: $('#edit_group').val(),
                            group_user_name: $('#group_user_name').val(),
                           
                            saveBtn: 'save'

                        })
                                success:(function (data) {

                                    //$("#user_cancelBtn").trigger("click");
                                    location.reload();
                                });
                    });

                    $(".addBtn").click(function () {
                        $("#group_user_name").val("");
                       
                        $("#myModal").modal();
                    });

                    $(".deleteBtn").click(function () {
                        if (confirm("ต้องการลบข้อมูลนี้หรือไม่"))
                        {
                            $.post('modules/group_user/delete_group.php', {
                                delete_id: $(this).attr("id"),
                                delete_group: 'delete'
                            })
                                    .done(function (data) {
                                        location.reload();
                                    });
                        }
                    });

                    $(".editBtn").click(function () {//แก้ไข group
                        $("#myModal").modal();
                        var id = $(this).attr("id");
                        $.post("modules/group_user/edit_query_group.php", {sql: id})
                                .done(function (data) {

                                    var ard = JSON.parse(data);
                                    $("#group_user_name").val(ard['group_user_name']);
                                   
                                    $("#edit_user").val(ard['group_user_id']);
                                });
                    });
                })
                        ;

            </script>
          
