<script>
function getfullname(val) {
    $.ajax({
    type: "POST",
    url: "getfullname.php",
    data:'studid1='+val,
    success: function(data){
        $("#fullname").html(data);
    }
    });
}
function getstud2fullname(val) {
    $.ajax({
    type: "POST",
    url: "getfullname.php",
    data:'studid2='+val,
    success: function(data){
        $("#stud2fullname").html(data);
    }
    });
}
function getstud3fullname(val) {
    $.ajax({
    type: "POST",
    url: "getfullname.php",
    data:'studid3='+val,
    success: function(data){
        $("#stud3fullname").html(data);
    }
    });
}
function getstud4fullname(val) {
    $.ajax({
    type: "POST",
    url: "getfullname.php",
    data:'studid4='+val,
    success: function(data){
        $("#stud4fullname").html(data);
    }
    });
}
function getstud5fullname(val) {
    $.ajax({
    type: "POST",
    url: "getfullname.php",
    data:'studid5='+val,
    success: function(data){
        $("#stud5fullname").html(data);
    }
    });
}
</script>   