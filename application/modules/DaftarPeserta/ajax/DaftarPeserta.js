$(document).ready(function(){
    $.ajax({
         url:"<?php echo base_url(); ?>index.php/DaftarPeserta/showTeamMember",
         success:function(data){
              $('#DataTeam').html(data);
         }
    });
});
function expand(Elements){
   $(Elements).parent('tr').toggleClass('expand').nextUntil('tr.team').slideToggle(100);
}

function deleteTeam(team){
  var x=team.id;
  $.ajax({
       url:"<?php echo base_url(); ?>index.php/DaftarPeserta/delete/"+x,
       success:function(data){
            $('#DataTeam').html(data);
       }
  });
}
