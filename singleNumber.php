<script type="text/javascript">
	
	var arr = [2,2,1];
	var result;
	var temp;
	for(i=0;i<arr.length;i++){
		temp=arr[i];
		for(j=i+1;j<arr.length;j++){
			if(temp==arr[j]){
				break;
			}else{
				result=temp;
			}
		}
	}

console.log(temp);




</script>