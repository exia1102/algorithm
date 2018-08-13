<script type="">
	

	var arr = [1,1,1,2,2,2,3,3,3,5,5,5,6,7,6];

	var arrUnique=[];
	var isrepeat;
	for(i=0;i<arr.length;i++){
		isrepeat=false;
		for(j=i+1;j<arr.length;j++){
			if(arr[i]===arr[j]){
				isrepeat=true;
				break;
			}
		}
		if(!isrepeat){
			arrUnique.push(arr[i]);
		}
		
	}
	console.log(arrUnique);



</script>