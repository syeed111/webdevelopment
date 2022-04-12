<div>
<input type="number" name="first_number" id="first_number" placeholder="first_number">
<input type="number" name="second_number" id="second_number" placeholder="second_number">
<input type="number" name="result" id="result" placeholder="result">
<input type="button" onclick="addition()" value="+">
<input type="button" onclick="subtract()" value="-">
<input type="button" onclick="division()" value="/">
<input type="button" onclick="multiplicaion()" value="x">


</div>
<script>
function addition()
{
var f_num=document.getElementById("first_number").value;
var s_num=document.getElementById("second_number").value;
document.getElementById("result").value=Number(f_num)+Number(s_num);
}

function subtract()
{
var f_num=document.getElementById("first_number").value;
var s_num=document.getElementById("second_number").value;
document.getElementById("result").value=Number(f_num)-Number(s_num);
}
function multiplicaion()
{
var f_num=document.getElementById("first_number").value;
var s_num=document.getElementById("second_number").value;
document.getElementById("result").value=Number(f_num)*Number(s_num);
}
function division()
{
var f_num=document.getElementById("first_number").value;
var s_num=document.getElementById("second_number").value;
document.getElementById("result").value=Number(f_num)/Number(s_num);
}

</script>
