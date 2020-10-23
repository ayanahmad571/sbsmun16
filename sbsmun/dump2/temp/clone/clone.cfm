<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dynamically Duplicating a form, by Tristan Denyer</title>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/clone-form-td.js"></script>




<!--- date picker start --->

<link rel="stylesheet" href="../dp_zebra/css/default.css" type="text/css">
<script type="text/javascript" src="../dp_zebra/js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="../dp_zebra/js/zebra_datepicker.js"></script>

<!--- date picker end --->





</head>

<body>



<form method="post">

<div id="entry1" class="clonedInput">

<fieldset>
<input class="input_fn" type="text" name="first_name1" id="first_name1" value="">

<input class="date_fn" id="employed_from1" name="employed_from1" type="text" value="">

</fieldset>


</div>


<div id="addDelButtons">
<input type="button" id="btnAdd" value="add section">
<input type="button" id="btnDel" value="remove section above">
</div>

<fieldset class="form-actions">
<input type="submit" value="Submit">
</fieldset>
</form>


<script>

var incrementalnumber = 1;

function addrow() {
     $('#employed_from'+incrementalnumber).Zebra_DatePicker();
}
$(document).ready(function(e) {
     $('#employed_from1').Zebra_DatePicker();
});

$( '#btnAdd' ).click(function() {
setTimeout(addrow, 100);
incrementalnumber++;
 $('#employed_from'+incrementalnumber).Zebra_DatePicker()
});

</script>

</body>
</html>