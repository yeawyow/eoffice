<?php
$Db->rule(); //จำนวนและมูลค่าการใช้ยาสมุนไพร
?>

<div class="row">

   
        <fieldset>
            <legend>รายงานการใช้ยาสมุนไพร</legend>
   <form id="select-date">
            <div class="form-group">
                <div class="col-md-6">
                 
                    <div class="input-daterange  input-group" id="datepicker">
                        <span class="input-group-addon">จากวันที่</span>
                        <input type="text" class="input-sm form-control" id="DateStart"  name="DateStart"/>
                        <span class="input-group-addon">ถึงวันที่</span>
                        <input type="text" class="input-sm form-control" id="DateEnd" name="DateEnd"/>
                    </div>
                    
                </div>
                <div class="col-md-6">

                    <button type="submit"  id="submit" class="btn btn-primary btn-full">ประมวลผล</button>
                </div>
            </div>
   </form>
            <legend></legend>
        </fieldset>
    <div id="showdata"></div>
   
<script type="text/javascript">
    $("#submit").click(function(){
       $("#select-date").validate({
            rules: {
                DateStart:
                        {required: true   
                        },

               DateEnd: {required: true    
                }
            },
            messages: {
                 DateStart: {
                    required: "กรุณากรอกเลือกวันที่"
                },
                 DateEnd: {
                    required: "กรุณาเลือกวันที่"
                                    }
            },
            submitHandler: function (form) {
                  //ทำอะไรต่อไป ในทีนี้ ให้ Submit form นะครับ
                 $.ajax({ 
           url:"modules/thaimedicine/drug_using_herbs_data.php",
           type:"post",
           data:{  DateStart: $('#DateStart').val(),
                   DateEnd:   $('#DateEnd').val()
               },
               success: function(data){
                   console.log(data);
                $("#showdata").html(data);
               }
             
       });
                
              
            }
            
        });
      
    });
  
     
</script>