<style>
p.show1{
    border-style: dotted;
    border-width: 2px;
	height:300px;
	padding:10px 10px 10px 10px; 
}
</style>
<br><b id='title1'>phone - Input your command (h for help):</b><input type="text" name="in_key" id="in_key"  onkeypress="return is_key(event)" onblur="document.getElementById('in_key').focus();">
<input type="hidden" name="ch_key" id="ch_key">
<div style="width:500px">
<p id='show1' class="show1">

</p>
</div>
<?
$list_help="i - insert a phpne number<br>d - delete a phpne number<br>m - modefy a phpne number<br>s - search<br>x - exit program";
$h="phone - Input your command (h for help):";
$m="modefy a phpne number:";
$i=" insert a phpne number:";
$d="delete a phpne number:";
$s="search phpne number:";
$x="exit();";
?>
<SCRIPT Language="JavaScript">
	 function is_key(evt)
      {
 var charCode = (evt.which) ? evt.which : event.keyCode
//alert(charCode); 
if(charCode == 13){//enter
var kk=document.getElementById("in_key").value;
document.getElementById("show1").innerHTML = "<?=$list_help?>";
document.getElementById("title1").innerHTML = "<?=$h?>";
document.getElementById("ch_key").value='h';
	}


if(document.getElementById("ch_key").value=='s'){
if (String.fromCharCode(evt.keyCode).match(/[^0-9]/g)) return false;
var kk=document.getElementById("in_key").value;
document.getElementById("in_key").value=kk.substring(0, 2)
}

	if(charCode == 104){//h
			 document.getElementById("show1").innerHTML = "<?=$list_help?>";
			 document.getElementById("title1").innerHTML = "<?=$h?>";
			 document.getElementById("ch_key").value='h';
			 document.getElementById("in_key").value="";
			 return false;
		 }

	if(charCode == 105){//i
			 document.getElementById("title1").innerHTML = "<?=$i?>";
			 document.getElementById("ch_key").value='i';
			 document.getElementById("in_key").value="";
			 return false;
		 }

       	if(charCode == 100){//d
			 document.getElementById("title1").innerHTML = "<?=$d?>";
			 document.getElementById("ch_key").value='d';
			  document.getElementById("in_key").value="";
            return false;
		 }
		if(charCode == 109){//m
			document.getElementById("title1").innerHTML = "<?=$m?>";
			document.getElementById("ch_key").value='m';
			 document.getElementById("in_key").value="";
            return false;
		 }
        if(charCode == 115){//s
			document.getElementById("title1").innerHTML = "<?=$s?>";
			document.getElementById("ch_key").value='s';
			 document.getElementById("in_key").value="";
            return false;
		 }
		 if(charCode == 120){//x
			var chk=confirm("confirm to exit program");
			if(chk){
			 document.getElementById("title1").innerHTML = "<?=$x?>";
			 document.getElementById("show1").style.visibility = "hidden";
			  document.getElementById("in_key").style.visibility = "hidden";
            return false;
			}
		 }


         return true;
      }
</script>
<script>
document.getElementById('in_key').focus();
</script>