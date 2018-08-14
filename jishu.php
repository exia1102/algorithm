<script type="text/javascript">
	

	var arr = [1,2,3,4,4,4,4,4,5,5,5,5,5,2,2,2,2,2,7,7,7,7];
	var key;
	var result = {};

	for(i=0;i<arr.length;i++){
		key=arr[i];
		if(result[key]){
			result[key]++
		}else{
			result[key]=1;
		}
	}

	console.log(result);




</script>