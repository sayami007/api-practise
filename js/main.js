$(document).ready(function(){

   $('.detail').click(function(){
        var id = this.value;
        $.ajax({
            url: "http://localhost/folder/detail.php?id="+id,
            context: document.body
        }).done(function(data) {
            alert(data);
        });
   });



});