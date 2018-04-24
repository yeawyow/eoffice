<div class="jumbotron">
    <form class="form-horizontal " id="palliaform" action="" method="POST">
        <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">วันที่เริ่ม</label>
            <div class="col-sm-10 ">
                <input  type="text" id="date_start"  name="date_start"  class="form-control datepicker " /> 
            </div>
        </div>      
        <div class="form-group">
            <label class="col-sm-2 col-sm-2 control-label">วันที่สิ้นสุด</label>
            <div class="col-sm-10 ">
                <input  type="text" id="date_end"  name="date_end"  class="form-control datepicker " /> 
            </div>
        </div>      
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <button  class="  btn btn-success">ประมวลผล</button>

            </div>
        </div>
    </form>
</div>
<div class="table-responsive">

    <table id="pallia" class=" display table table-bordered" cellspacing="0" width="100%">
        <thead  >

            <tr class="table-success">
                <th>ลำดับ</th>

                <th>HN</th>
                <th>CID</th>

                <th>ชื่อ-สกุล</th>
                <th>ที่อยู่</th>
                <th>วินิจฉัย</th>
                <th>รหัส Z</th>
                <th>สถานะเสียชีวิต</th>
                <th>เยี่ยมบ้าน</th>
                <th>เวชภัณฑ์และอุปกรณ์</th>
                <th>OP1</th>
                <th>OP2</th>
                <th>OP3</th>
                <th>OP4</th>
                <th>OP5</th>
                <th>OP6</th>

            </tr>

        </thead>

    </table>
</div>

<script type="text/javascript">
    $("#palliaform").validate({
        rules: {
            date_start: {
                required: true
            },
            date_end: {
                required: true
            }
        },
        messages: {
            date_start: {
                required: "คุณไม่ได้เลือกวันที่เริ่ม "
            },
            date_end: {
                required: "คุณไม่ได้เลือกวันที่สิ้นสุด"
            }
        },
        submitHandler: function () {
            $("#pallia").dataTable().fnDestroy();
            //  alert($('#date_start').val());
            //ทำอะไรต่อไป ในทีนี้ ให้ Submit form นะครับ
            var t = $('#pallia').DataTable({
"iDisplayLength": 100,
                ajax: {
                    url: "modules/palliative/palliative_data.php",
                    type: "post",
                    dataType: 'json',
                    data: {date_start: $('#date_start').val(), date_end: $('#date_end').val()}
                },

                "order": [[1, 'asc']]
            });
            t.on('order.dt search.dt', function () {
                t.column(0).nodes().each(function (cell, i) {
                    cell.innerHTML = i + 1;
                });
            });

            $("#date_start").val("");
            $("#date_end").val("");
        }

    });
    /* var t = $('#pallia').DataTable({
     "ajax": {
     "url": "modules/palliative/palliative_data.php",
     "type": "post",
     "data": {req: 'req'}
     },
     
     "order": [[1, 'asc']]
     });
     t.on('order.dt search.dt', function () {
     t.column(0).nodes().each(function (cell, i) {
     cell.innerHTML = i + 1;
     
     });
     }).draw(); //เรียกใช้งาน datatable */
</script>
