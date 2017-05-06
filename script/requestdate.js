$(function() {
  $("input.date").datepicker({ duration:'fast' });
  
  $("form").submit(function() {
    var form = $(this);
    
    if($(".required").val() === "") {
      alert("Name is required");
      $(".required")
        .css("background-color", "pink")
        .focus();
      return false;
    }
    
    //--- Make ajax request
    jQuery.post(form.attr('action'), form.serialize(), function(data, txtStatus) {
      if(txtStatus === "success") {
        form.hide();
        setTimeout(function() {
          $("#emailconfirmation").fadeIn("slow");
        }, 200);
      } else {
        alert("Something went wrong, please email us at: info@pawblemsolved.com");
      }
    }, 'text');
    
    //--- If success hide form, show thank you message.
    return false;
  });
});
