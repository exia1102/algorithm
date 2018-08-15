<script type="text/javascript">
	var arr=[0,8,9,12,16,20,22,50];
	var distance=[];
	var result=[]
	var max=1000000;

	for(i=0;i<arr.length;i++){
		temp=arr[i];

		for(j=i+1;j<arr.length;j++){
			difference=temp-arr[j];
			if(Math.abs(difference)<max){
				result[0]=i
				result[1]=j;
				max=Math.abs(difference);
				console.log(max);
			}
	}
}

	console.log(result);





</script>