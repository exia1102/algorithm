<script type="text/javascript">
	
	var arr=[1,6,5,7,8,3,4,2,6,7];
	var tem;
	for(i=0;i<arr.length;i++){
		for(j=i+1;j<arr.length;j++){
			if(arr[i]>=arr[j]){
				tem=arr[i];
				arr[i]=arr[j];
				arr[j]=tem;
			}
		}
	}
	console.log(arr);



</script>