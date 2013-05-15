
<form method ="post"   onSubmit="return check(this)"  action="jo.php">
 SEQ： <input name="SEQnumber" type="text"> <br>
 
 ID： <input name="idnumber" type="text"> <br>
 
 ATime： <input name="TimeArrive" type="text"> <br>
 
 Time： <input name="SpendTime" type="text"> <br>
 
 Name： <input name="name" type="text" > <br>
 
 Gender： <input name="sex" type="text"> <br>
 
 Cate： <input name="tpyesofgame" type="text"> <br>
 
 <input value="確認" type="submit"> <br>

 <input type="reset" value="重新填寫" > <br>
 
</form> 
 

<Script Language='JavaScript'>
function check(form) {
 
if(form.SEQnumber.value == "") {
alert("未輸序號");
 return false;
}
 
else if(form.idnumber.value == "") {
alert("未輸入ID");
 return false;
}
 
else if(form.TimeArrive.value == "") {
alert("未輸入抵達時間");
 return false;
}
 
else if(form.SpendTime.value == "") {
alert("未輸入花費時間");
 return false;
}
 
else if(form.name.value == "") {
alert("未輸入姓名");
 return false;
}
 else if(form.sex.value == "") {
alert("未輸入性別");
 return false;
}
else if(form.tpyesofgame.value == "") {
alert("未輸入參賽組別");
 return false;
}
else{
 form.submit();}
 }
</script>
 