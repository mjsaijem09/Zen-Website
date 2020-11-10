<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zen Body Massage - Book Appointment</title>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('css/make-appointment.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('vendor/bootstrap-4.5.3/css/bootstrap.min.css') }}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="{{ url('vendor/bootstrap/js/jquery-3.5.1.slim.min.js') }}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{ url('vendor/bootstrap-4.5.3/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body class="custom">

    @yield('content')

<script>
function deselectableRadios(rootElement) {
  if(!rootElement) rootElement = document;
  if(!window.radioChecked) window.radioChecked = null;
  window.radioClick = function(e) {
    const obj = e.target;
    if(e.keyCode) return obj.checked = e.keyCode!=32;
    obj.checked = window.radioChecked != obj;
    window.radioChecked = obj.checked ? obj : null;
  }
  rootElement.querySelectorAll("input[type='radio']").forEach( radio => {
    radio.setAttribute("onclick", "radioClick(event)");
    radio.setAttribute("onkeyup", "radioClick(event)");
  });
}
deselectableRadios();
</script>
<script>
var btn_hide = document.getElementById("btn_hide");
$('input[type=radio]').click(function(e) {//jQuery works on clicking radio box
    var value = $(this).val(); //Get the clicked checkbox value
    $('.r-text').html('$'+value);
    if (!$('input[name=radio]').is(':checked')) {
        $('.r-text').html("$" + 0);
        btn_hide.style.display = "none";
    }else{
        btn_hide.style.display = "block";
    }
});
</script>
</body>
</html>