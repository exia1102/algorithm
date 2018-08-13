<script type="text/javascript">
	
	var arr=[1,2,3,4,5,6,7,8];

	var len=arr.length;
	if(len%2==0){
		var result=(arr[len/2]+arr[len/2-1])/2
	}
	if(len%2!=0){
		var result=arr[(len-1)/2];
	}

	console.log(result);
	


</script>