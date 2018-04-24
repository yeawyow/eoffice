<?PHP $Db->rule('group_user'); ?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            จัดการกลุ่มผู้ใช้
        </h2>
    </div>
</div>

<div class="table-responsive">

    <table id="example" class=" display table table-bordered" cellspacing="0" width="100%">
        <thead >

            <tr>
                <th>ลำดับ</th>
                <th>ชื่อกลุ่ม</th>

                <th><button class="addBtn btn btn-success">เพิ่มข้อมูล</button></th>

            </tr>

        </thead>

    </table>
</div>



<script type="text/javascript">
    $(document).ready(function () {
        var t = $('#example').DataTable({
            "ajax": {
                "url": "modules/group_user/default_group_data.php",
                "type": "POST",
                "data": {req: 'req'}
            },

            "columnDefs": [

                {
                    "targets": -1,
                    "data": null,
                    "defaultContent": " <button  id='edit' class='btn btn-primary'>แก้ไข</button>   <button id='delete' class='btn btn-danger' >ลบ</button>  <button id='group_access' class='btn btn-warning' >สิทธ์กลุ่ม</button>",
                    'bSortable': false
                },

                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }

            ],
            "order": [[1, 'asc']]
        });
        t.on('order.dt search.dt', function () {
            t.column(0).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;

            });
        }).draw(); //เรียกใช้งาน datatable

        $('  #example tbody').on('click', '#edit', function () { //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
            $("#usergroupformModal").modal();
            $.post("modules/group_user/edit_query_group.php", {sql: data[0]})
                    .done(function (data) {
                        var ard = JSON.parse(data);

                        $("#group_name").val(ard['group_user_name']);
                        $("#edit_group").val(ard['id']);

                    });
            // alert( data[0] +"'s salary is: "+ data[ 0 ] );
        });
        $(' #example tbody').on('click', '#group_access', function () { //ดึง id มาแก้ไขจาก datatable
            var data = t.row($(this).parents('tr')).data();
            $("#groupaccessformModal").modal();
            $.post("modules/group_user/edit_query_group.php", {sql: data[0]})
                    .done(function (data) {
                        console.log(data);
                        var ard = JSON.parse(data);

                        $("#group_name_access").text(ard['group_user_name']);
                        $("#edit_group2").val(ard['id']);

                        $("#usermanager").val(ard['usermanager']);

                    });
            // alert( data[0] +"'s salary is: "+ data[ 0 ] );
        });
        $('#example tbody').on('click', '#delete', function () {//ดึง id มาลบ datatable
            var data = t.row($(this).parents('tr')).data();
            if (confirm("ต้องการลบข้อมูลนี้หรือไม่"))
            {
                $.post('modules/group_user/delete_group.php', {
                    delete_id: data[0],
                    delete_group: 'delete'
                })
                        .done(function () {
                            t.ajax.reload();
                        });
            }

        });
        $(function () {
            $(".addBtn").click(function () {

                $("#group_name").val("");
                $("#usergroupformModal").modal();
            });
            $("#cancelBtn").click(function () {
                $("#group_name-error").empty();

            });

            $("#userform").validate({
                rules: {
                    group_name:
                            {required: true,
                                minlength: 5,
                                maxlength: 30,
                                remote: {
                                    url: "modules/group_user/chk_group.php",
                                    type: "post"
                                }
                            },

                },
                messages: {
                    group_name: {
                        required: "กรุณากรอก ชื่อกลุ่ม ",
                        minlength: "อย่างน้อย 5 ตัวอักษร",
                        maxlength: "ไม่เกิน 30 ตัวอักษร",
                        remote: "มีการใช้ชื่อนี้แล้ว!"

                    },

                },
                submitHandler: function (form) {
                    form.submit();
                    //ทำอะไรต่อไป ในทีนี้ ให้ Submit form นะครับ
                    $.post('modules/group_user/add_group_user.php', {
                        group_name: $('#group_name').val(),
                        edit_group: $('#edit_group').val(),
                        saveBtn: 'save'
                    });
                    success:(function (response) {

                        $("#group_name").show();
                        $("#group_name").empty();

                        //$("#user_cancelBtn").trigger("click");
                        t.ajax.reload();

                    });
                }
            });
        });

    });
</script>
<div   role="dialog" data-keyboard="false" data-backdrop="static" id="usergroupformModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">เพิ่มกลุ่มผู้ใช้</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">

                            <div class="panel-body">
                                <form class="form-horizontal " id="userform" action="" method="POST">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ชื่อกลุ่ม</label>
                                        <div class="col-sm-10">
                                            <input type="text" id="group_name"  name="group_name"   class="form-control" />   
                                        </div>
                                    </div>

                                    <input id="edit_group" name="edit_group" type="hidden">
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button  class="btn btn-success">บันทึก</button>
                                            <button id="cancelBtn" type="button" class="btn btn-danger btn-default pull-center" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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
</div>

<div   role="dialog" data-keyboard="false" data-backdrop="static" id="groupaccessformModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Form เพิ่มผู้ใช้งาน</h4>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">

                            <div class="panel-body">
                                <form class="form-horizontal " id="userform" action="" method="POST">
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">USERNAME</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" id="usermanager"  name="usermanager"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">PASSWORD</label>
                                        <div class="col-sm-10">
                                            <input id="password" name="password" type="password" onkeyup="eng_only()" class="form-control"

                                                   >

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">คำนำหน้า</label>
                                        <div class="col-sm-10">
                                            <select  id="pname" name="pname" class="form-control" >
                                                <option value="">-- เมนู --</option>
                                                <?php
                                                $sql = $Db->query('', 'pname');
                                                foreach ($sql as $row) {
                                                    ?>
                                                    <option value="<?php echo $row['pname_id'] ?>"> <?php echo $row['pname']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ชื่อ</label>
                                        <div class="col-sm-10">
                                            <input id="fname" name="fname"  type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">นามสกุล</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"  id="lname" name="lname" type="text" data-validation="required">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">กลุ่มผู้ใช้งาน</label>
                                        <div class="col-sm-10">
                                            <select  id="group_user" name="group_user" class="form-control " data-validation="required"  data-validation-error-msg="กรุณาเลือกกลุ่มผู้ใช้งาน">
                                                <option value="" >-- เมนู --</option>
                                                <?php
                                                $sql = $Db->query('', 'group_user');
                                                foreach ($sql as $row) {
                                                    ?>

                                                    <option value="<?php echo $row['id'] ?>"> <?php echo $row['group_user_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 col-sm-2 control-label">ฝ่าย/งาน</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="hospital_department" name="hospital_department"  style="width:100%;">
                                                <option value="" >-- เมนู --</option>
                                                <?php
                                                $sql = $Db->query('', 'hospital_department');
                                                foreach ($sql as $row) {
                                                    ?>

                                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?> : <?php echo $row['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <input id="edit_user" name="edit_user" type="hidden">
                                    <input id="pass_old" name="pass_old" type="hidden">
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button  class="  btn btn-success">บันทึก</button>
                                            <button id="cancelBtn" type="button" class="btn btn-danger btn-default pull-center" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
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
</div>

