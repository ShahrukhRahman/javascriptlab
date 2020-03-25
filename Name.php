<script type="text/javascript">
function f1()
{
var username= uname;	
var uname= document.getElementById('name').value;
if(uname=="")
{
	document.getElementById('dname').innerHTML="name cannot be empty"
}
var name= uname.split("");
for(var a=0; a<name.length; a++)
{
	if((name[a]<'A'||name[a]>'Z')||(name[a]<'a'||name[a]>z)|| name[a]!='.'|| name[a]!='-')
	{document.getElementById('dname').innerHTML="invalid character"}
break;}
	if (name[0]>0 && name[0]>9) {
		document.getElementById('dname').innerHTML="must start with a letter"
	}

}
</script>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form>
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
