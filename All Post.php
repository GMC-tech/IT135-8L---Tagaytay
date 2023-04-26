<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Nav Bar CSS link-->
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <!-- Footer CSS link-->
    <link rel="stylesheet" type="text/css" href="footer.css">

    <!-- Footer Icon link-->
    <script src="https://kit.fontawesome.com/174cd18bf7.js" crossorigin="anonymous"></script>    
 </head>

<style >

.button {
  background-color: #033296; 
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.button1 {border-radius: 25px; 
		  font-size: 15px;
		  padding: 20px;
		  width: 200px;
		  margin: 4px 10px;}

.button1:hover {
  background-color: #555555;
  color: white;}

  
h2{
color: #033296; }

  
</style>

 <body>

    <header>
        <a href="#" class="logo"><img src="navbar-image/logo.png"></a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>

        <nav class="navbar">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">PROGRAMS</a></li>
                <li><a href="#">NEWS & EVENTS +</a>
                    <ul>
                        <li><a href="#">NEWS</a></li>
                        <li><a href="#">EVENTS</a></li>
                    </ul>
                </li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">ACCOUNT</a></li>
            </ul>
        </nav>
    </header>

  <br><br>

  <div style="text-align:center">
	<a href="All Post.php" class="button button1"><b>ALL POSTS</b></a>
	<a href="" class="button button1"><b>PROGRAMS</b></a>
	<a href="All News.php" class="button button1"><b>NEWS</b></a>
	<a href="" class="button button1"><b>EVENTS</b></a>
	<a href="" class="button button1"><b>TESITIMONIES</b></a>
 </div>

  <br />
  <div class="container">
   <h2 align="center">All Posts</h2>
   <br />
   <br />

   <div align="left">
    <input type="file" name="multiple_files" id="multiple_files" multiple />
    <span class="text-muted">Only .jpg and .png file allowed</span>
    <span id="error_multiple_files"></span>
   </div>
   <br />
   <br />

   <div class="table-responsive" id="image_table">
    
   </div>
  </div>
 <br><br>
 <br><br>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">
                <div class="footer-col">
                    <img src="footer-image/taytay-logo.png">
                    <h4>BROWSE</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Programs</a></li>
                        <li><a href="#">News & Events</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-col1">
                    <img src="footer-image/taytay-logo.png">
                    <img src="footer-image/smile-logo.png">
                    <h4>CONTACT US</h4>
                    <ul>
                        <div class="loc">
                            <li><a href="#">Likod ng Bagong Palengke, Market Road, Sitio Batong Dalig, Barangay San Juan, Taytay, Philippines, 1920</a></li>
                        </div>
                        <div class="mail">
                            <li><a href="mailto:email@gmail.com">agriculture@taytayrizal.gov.ph</a></li>       
                        </div>
                        <div class="fb">
                            <li><a href="https://www.facebook.com/TaytayAgriculture" target="_blank">facebook.com/TaytayAgriculture</a></li>
                        </div>
                    </ul>
                </div>

            </div>
        </div>
    </footer>
 </body>
</html>
<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="edit_image_form">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Edit Image Details</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Image Name</label>
      <input type="text" name="image_name" id="image_name" class="form-control" />
     </div>
     <div class="form-group">
      <label>Image Description</label>
      <input type="text" name="image_description" id="image_description" class="form-control" />
     </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="image_id" id="image_id" value="" />
     <input type="submit" name="submit" class="btn btn-info" value="Edit" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>

<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"fetchPost.php",
   method:"POST",
   success:function(data)
   {
    $('#image_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 2000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"uploadPost.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var image_id = $(this).attr("id");
  $.ajax({
   url:"editPost.php",
   method:"post",
   data:{image_id:image_id},
   dataType:"json",
   success:function(data)
   {
    $('#imageModal').modal('show');
    $('#image_id').val(image_id);
    $('#image_name').val(data.image_name);
    $('#image_description').val(data.image_description);
   }
  });
 }); 
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image_name");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"deletePost.php",
    method:"POST",
    data:{image_id:image_id, image_name:image_name},
    success:function(data)
    {
     load_image_data();
     alert("Image removed");
    }
   });
  }
 }); 
 $('#edit_image_form').on('submit', function(event){
  event.preventDefault();
  if($('#image_name').val() == '')
  {
   alert("Enter Image Name");
  }
  else
  {
   $.ajax({
    url:"updatePost.php",
    method:"POST",
    data:$('#edit_image_form').serialize(),
    success:function(data)
    {
     $('#imageModal').modal('hide');
     load_image_data();
     alert('Image Details updated');
    }
   });
  }
 }); 
});
</script>
