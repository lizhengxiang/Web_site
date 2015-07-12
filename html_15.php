<!doctype html>
<html>
<head>
<meta charset = "utf-8">
<title> creat fremeset</title>
</head>
<body>
<script type = "text/javascript">
if(sessionStorage.count){
	sessionStorage.count = Number(sessionStorage.count) + 1;
	document.write("count " + sessionStorage.count);
}else{
	sessionStorage.count = 1;
}
document.write("count " + sessionStorage.count)
/*
if(localStorage.count){
	localStorage.count = Number(localStorage.count) + 1;
    //document.write("count " + localStorage.count);
else{
    localStorage.count = 1;
}
document.write("count " + localStorage.count)*/
</script>
</body>
</html>
