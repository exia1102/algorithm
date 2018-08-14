<script type="text/javascript">
	var str="321";
	var arr=str.split('');
	var resultArr=[];
	var result='';
	var temp;

	for(i=arr.length-1;i>=0;i--){
		temp=arr[i];
		resultArr.push(temp);
	}

	for(var i in resultArr){
		result+=resultArr[i];

	}

	console.log(result);






</script>