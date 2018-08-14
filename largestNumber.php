<script type="text/javascript">
	var input=[40,40,88];
	var temp="";
	var isLargest;
	var result="";
	for(i=0;i<input.length;i++){
		temp=input[i];
		isLargest=true;
		for(j=i+1;j<input.length;j++){
			if(temp<input[j]){
				isLargest=false;
			}
		}
		if(isLargest){
			result=temp;
			break;
		}
	}
	console.log(result);



</script>