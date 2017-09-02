   <head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/site.min.css">
    <link rel="stylesheet" href="css/datepickerui.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/simple-sidebar.css">
    <link rel="icon" href="lohgo.png">
    
  <script src="js/datepicker.js"></script>
  <script src="js/datepicker2.js"></script>
  <script>
    $(function() {
    $( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+7M +10D" });
  });
  </script>
  <script>
  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<tr id="myTableRow'+x+'"><td>Point '+(x)+'</td><td><div class="input-group input col-md-7"><input class="form-control" placeholder="Ex. Open user panel" required="" type="text" name="myPoint[]" maxlength="150"></div><a href="#" class="remove_field">Remove</a></tr>'); //add input box
        }
    });
    // $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        
        e.preventDefault(); $("#myTableRow"+x+"").remove(); x--;
    })
});
  </script>
</head>