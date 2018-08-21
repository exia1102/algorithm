<script type="text/javascript">
	
	var str = "hello,world";
	var strArr=str.split('');
	var result='';
	var resultArr=[];
	for(i=strArr.length-1;i>=0;i--){
		resultArr.push(strArr[i]);
	}
	for(i=0;i<resultArr.length;i++){
		result+=resultArr[i];
	}
	console.log(result);




</script>