<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20BAI1154_Exp9_IWPLab</title>

<script>
var username = prompt("Enter your username id: ");
var count = 0;

for(i = 0;i<username.length;i++){
if(username.charAt(i)=='a'||username.charAt(i)=='e'||username.charAt(i)=='i'||username.charAt(i)=='o'||username.charAt(i)=='u'){
count++;
}
}

var code = username.charAt(0).toUpperCase() + count +
username.charAt(username.length-1) + "#" + (username.length-count)
alert("Welcome " + username)
console.log(code)
var cost = 0;
var newcost = 0;
var total = 0;

function handleClick(){

document.getElementById("detail").innerHTML = "Billing Details";
var things = document.getElementsByName("clothing");
const items = []
const price = []
for(i = 0;i<things.length;i++){
if(!things[i].checked){
items.push(things[i].id)
}
}
for(i = 1;i<things.length;i++){
if(things[i].checked){
price.push(Number(things[i].value))
}
}
var check = document.getElementById("t-shirt");
if(newcost>0 && check.checked ){
price.push(Number(newcost))
}
document.getElementById("final3").innerHTML = "Product details" + "<br>"
+ "Maximum product price: " + Math.max.apply(null,price).toFixed(2) + "<br>" +
"Minimum product price: " + Math.min.apply(null,price).toFixed(2)
if(items.length>0){
document.getElementById("final2").innerHTML = "Items not selected for billing:" + items; 
}
else{
document.getElementById("final2").innerHTML = "Items not selected for billing:" + None;
}
document.getElementById("final1").innerHTML = "Total without Discount:" +"$"+cost.toFixed(2)  
var temp = cost - 0.10*cost
if(Number(temp)>10){
document.getElementById("final").innerHTML = "Total after discount:" +  "$" + (temp-temp*0.10).toFixed(2) 
document.getElementById("total").innerHTML = "$"+(temp -
0.10*temp).toFixed(2)
}
else{
document.getElementById("final").innerHTML = "Total after discount:" +  "$" +temp.toFixed(2)
document.getElementById("total").innerHTML = "$"+temp.toFixed(2)
}
}


function onTshirt(){
var n1 = document.getElementById("t");
if(n1.value==0){
cost = cost - newcost
newcost = 0;
newcost = Number(0)
cost = newcost + cost
}
else if(n1.value==1){
cost = cost - newcost
newcost = 0;
newcost = Number(19.99)
cost = newcost + cost
}
else if(n1.value==2){
cost = cost - newcost
newcost= 0;
newcost = Number(2*19.99)
cost = newcost + cost
}
else if(n1.value==3){
cost = cost - newcost
newcost = 0;
newcost = Number(3*19.99)
cost = newcost + cost
}
else if(n1.value==4){
cost = cost - newcost
newcost = 0;
newcost = Number(4*19.99) 
cost = newcost + cost
}
else if(n1.value==5){
cost = cost - newcost
newcost = 0;
newcost = Number(5*19.99) 
cost = newcost + cost
}
document.getElementById("total").innerHTML = "$"+cost.toFixed(2)
}

function onMug(){
var n1 = document.getElementById("mug");
if(n1.checked){
var amt = Number(n1.value)
cost += amt
}
else{
cost = cost - Number(n1.value);
}
document.getElementById("total").innerHTML = "$"+cost.toFixed(2)
}

function onPencil(){
var n1 = document.getElementById("pencil");
if(n1.checked){
var amt = Number(n1.value)
cost += amt
}
else{
cost = cost - Number(n1.value);
}
document.getElementById("total").innerHTML = "$"+cost.toFixed(2)
}

function onSticker(){
var n1 = document.getElementById("sticker");
if(n1.checked){
var amt = Number(n1.value)
cost += amt
}
else{
cost = cost - Number(n1.value);
}
document.getElementById("total").innerHTML = "$"+cost.toFixed(2)
}
</script>
</head>

<body>
<h2>Clothing Limited Products</h2>
<hr>
<h2>Clothing Products</h2>
<form name = "f1" method = "get">
<input type = "checkbox" name = "clothing" id = "t-shirt" >Clothing Limited T-Shirt 
<b>$19.99</b><br><br>
<select name = "t-shirt" onclick = "onTshirt()" id = "t" >
<option value = "0">0</option>
<option value = "1" >1</option>
<option value = "2" >2</option>
<option value = "3" >3</option>
<option value = "4" >4</option>
<option value = "5" >5</option>
</select>
<label for = "t-shirt">Quantity</label>
<select name = "color" id = "color" >
<option ></option>
<option value = "Red">Red</option>
<option value = "Green">Green</option>
<option value = "Blue">Blue</option>
</select>
<label for = "color">Color</label>
<select name = "size" id = "size" >
<option ></option>
<option value = "XS">XS</option>
<option value = "S">S</option>
<option value = "M">M</option>
<option value = "L">L</option>
<option value = "XL">XL</option>
<option value = "XXL">XXL</option>
</select>
<label for = "size">Size</label>
<br>
<br>
<br>
<input type = "checkbox" name = "clothing" id = "mug" onclick = "onMug()"
value = "7.99">Clothing Limited Mug <b>$7.99</b><br><br>
<input type = "checkbox" name = "clothing" id = "pencil" onclick = 
"onPencil()" value = "5.99">Clothing Limited Pencil <b>$5.99</b><br><br>
<input type = "checkbox" name = "clothing" id = "sticker" onclick = 
"onSticker()" value = "6.99">Clothing Limited Sticker <b>$6.99</b><br><br>
<b>Total: <div id = "total" style = "display: inline-block; padding-left: 
80px;" >$0.00</div></b><br>
<br>
Coupon code: <input type = "text" name = "c1"><br>
<br>
<input type = "submit" name = "save" value = "Submit" onclick = 
"handleClick()" style = "background-color: red; padding: 12px 28px; font-size: 
13px; border-radius: 10px; cursor: pointer; margin-left: 130px">
<br>
<h2><div id = "detail"></div></h2>
<div id = "final1" style = "display: inline-block;"></div>
<div id = "final"></div>
<br>
<div id = "final3"></div>
<div id = "final2"></div>
</form>
<?php
$connect = mysqli_connect("localhost","root","","clothing") or die("Connection 
Failed");
if(!empty($_GET['save'])){
$Quantity = $_GET['t-shirt'];
$color = $_GET['color'];
$size = $_GET['size'];
$query = "insert into clothing( Quantity,Color,Size) values 
('$Quantity','$color','$size')";
if(mysqli_query($connect,$query))
{
echo "Inserted Successfully";
}
else{
echo "Data not Inserted";
}
}
?>
</body>
</html>
