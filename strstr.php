<script type="text/javascript">
	
	var needle="aa";
	var str="bbaa";
	var needleArr=needle.split('');
	var strArr=str.split('');
	var result;
	for(i=0;i<strArr.length;i++){
		if(strArr[i]==needleArr[0]){
			result=i;
			break;
		}
	}
	console.log(result);



</script>