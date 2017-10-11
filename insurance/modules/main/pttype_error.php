<section class="content-header">
    <h1>
        PTTYPE ERROR
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"></li>
    </ol>
</section>

<div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"></h3>

            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tr>
                    <th>ลำดับ</th>
                   
                </tr>
                <tbody id="show-list-data ">
                   
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>

<script type="text/javascript">
    
    var dataList = {}
    $(function () {
        dataList.getList = (function () {
            
            var url = "modules/main/pttype_error_data.php"; // ไฟล์ที่ต้องการรับค้า
            var dataSet = {action: 'list'}; // กำหนดชื่อและค่าที่ต้องการส่ง
             //var rowData = $(".list-data").clone(true);
         
            $.post(url, dataSet, function (response) {
                // alert("แจ้งเเมื่อทำการส่งข้อมูลเรียบร้อยแล้ว");
                console.log(response);
               // var rowListData = "";
                var myJSON = [{     "user_id": "1",     "user_name": "User1",     "user_age": "20" }, {     "user_id": "2",     "user_name": "User2",     "user_age": "21"              }, {     "user_id": "3",     "user_name": "User3",     "user_age": "24" }, {     "user_id": "4",     "user_name": "User4",     "user_age":              "34" }, {     "user_id": "5",     "user_name": "User5",     "user_age": "27" }];
                // $('.show-list-data tbody').empty();
                 var obj = $.parseJSON(response);
               
                $.each(obj, function (key,val) {
                    var tr = "<tr>";
                  tr = tr + "<td>"+val["hospmain"]+"</td>";
                  tr = tr + "</tr>";
                  $('.show-list-data > tbody:last').append(tr);
                }); // end loop	
            });
           
        });
       
        dataList.getList(0, true);
       
      //setInterval(dataList.getList, 10000);   // 1000 = 1 second   
    });
</script>

