 <!-- end wrapper -->
</div>
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
    <!--   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> -->
     <script src="<?php echo base_url(); ?>assets/scripts/datepicker.js"></script>
       <script>
    $(function() {
      $('[data-toggle="datepicker"]').datepicker({
        autoHide: true,
        zIndex: 2048,
        format: 'yyyy-mm-dd'
      });
    });
  </script>
    <script type="text/javascript">  
function del_plan( id)
{
	
	  var dataString ={ id: id};
	$.ajax({
type: "POST",
url: "<?php echo base_url(); ?>index.php/plan/delete",
data: dataString,
success: function (data) {
var json = $.parseJSON(data);
if(json.status==1)
{
	 location.reload();
$("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
}
else
{
$("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
}
}
,
error: function() 
{
}
});
    
}

function del_course( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/course/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}

function del_video( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/video/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}
function del_sld( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/slider/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}

function del_channel( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/channel/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}

function del_playlist( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/playlist/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}


function del_candidate( id)
{

    var dataString ={ id: id};
    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>index.php/candidate/delete",
        data: dataString,
        success: function (data) {
            var json = $.parseJSON(data);
            if(json.status==1)
            {
                location.reload();
                $("#status").html('<div class="alert alert-info alert-dismissable"> SucessFully Deleted <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
            else
            {
                $("#status").html('<div class="alert alert-warning alert-dismissable"> Something Wrong.. <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>');
            }
        }
        ,
        error: function()
        {
        }
    });

}

</script>
</body>

</html>
