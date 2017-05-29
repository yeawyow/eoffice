<?php

$Db->rule('report_access','รายงานยข้อมูลการใช้ยาสมุนไพรในโรงพยาบาล','index');//จำนวนและมูลค่าการใช้ยาสมุนไพร
?>



<div class="col-sm-12">
<!-- SELECT2 EXAMPLE -->
<h2 class="text-xs-center">รายงานยข้อมูลการใช้ยาสมุนไพรในโรงพยาบาล </h2>
<div class="jumbotron">
   <h5>วันที่ </h5>
   <div class="form-group">
          <input name="d1" id="d1" class="datepicker form-control" type="text" data-provide="datepicker"  data-date-language="th-th"/>
        </div>
        <h5>ถึงวันที่</h5>
        <div class="form-group">
          <div class="bootstrap-timepicker">
            <input name="d2" id="d2" class="datepicker form-control" type="text" data-provide="datepicker"  data-date-language="th-th"/>
          </div>
        </div>
        <div class="form-group">
        <button type="button" class="form-control btn btn-primary" id="btnSearch">
        <span class="glyphicon glyphicon-search "></span>
        ค้นหา
       
    </button>
        </div>
      </div>


<div class="loading"></div>
  
    <div class="card" >
      
        <span id="list-data"></span></div> 
    
</div>

   

<script type="text/javascript">
    $('ducument').ready(function(){
        $("#btnSearch").click(function () {
           var progress3 = $(".loading").progressTimer({
    timeLimit: 30
});  
            $.ajax({
                url: "modules/drug_report/drug_using_herbs_data.php",
                type: "post",
                data: {
                    d1: $("#d1").val(),
                    d2: $("#d2").val()

                },
 beforeSend: function () {
                     $("#list-data").hide();
                    $(".loading").show();
                    
                },
               
                complete: function () {
                    
                    progress3.progressTimer('complete', {
        successText: 'Connected successfully ',
        onFinish: function () {
             
           
            $("#list-data").show(); $(".loading").hide();
        }
    });
                   
                    
                },
               
                success: function (data) { 
                    $("#list-data").html(data);
                }
            });
        });

    });
</script>

