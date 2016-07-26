function setType(type){
  var dataString = 'type='+ type;
  $.ajax
  ({
   type: "POST",
   url: "getType.php",
   data: dataString,
   cache: false,
   success: function(html)
   {
      $("#picture").html(html);
   }
   });
}
