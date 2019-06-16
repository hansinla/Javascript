
//  API key:  AIzaSyCIBW_7z2tBu_YEbUtE6NROYNXrJt042Us

var firstRun = true;

$( document ).ready(function() {
  if (firstRun){
    $(".alert").hide();
    firstRun = false;
  }

  $("#submit").on('click', function(event){
    event.preventDefault();

    $(".alert").hide();

    if ($("#address").val() == "") {
      $("#errorBox").html('<strong>Warning!</strong><br />Please enter an address and try again.');
      $("#errorBox").fadeIn();
    } else {
      getZip($("#address").val());
    }
  });
});

function getZip(address){
    $.getJSON('https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCIBW_7z2tBu_YEbUtE6NROYNXrJt042Us', {
      sensor: false,
      address: address
      }, function(data, textStatus){
        console.log(data.results[0]);

        if (data.results[0] === undefined) {
          $("#errorBox").html('<strong>Warning!</strong><br />Could not find this address.');
          $("#errorBox").fadeIn();
        } else {
          var zip = data.results[0].formatted_address;
          $("#messBox").html('<strong>' + zip + '</strong>');
          $("#messBox").fadeIn();
        }
      }
    ); 
}

