$(document).ready(function(){
  $("#add_restaurant_details").hide();
  $("input[name=decider]").on("click",function(){
    var selectedValue=$ ("input[name=decider]:checked").val();
    if(selectedValue=="Restaurant_Owner"){
      $("#add_restaurant_details").show();
    } else if(selectedValue="Food_Lover"){
      $("#add_restaurant_details").hide();
    }
  });
});
