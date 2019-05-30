$(document).ready(function(){
	function readURL(input,l) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
    	var file= e.target.result;
      console.log(file);
      $(l).attr('src',file);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#proPicin").change(function() {
  console.log("Pic");
  readURL(this,$("#proPic"));
});

$("#cvrPicin").change(function() {
  console.log("coverPic");
  readURL(this,$("#cvrPic"));
});
$

});