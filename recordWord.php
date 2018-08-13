<script type="text/javascript">
	var str="hello my name is Nero"
	var arr=[];
	var k=1;

	var strSplit=str.split(' ');
	for(i=0;i<strSplit.length;i++){
		arr[strSplit[i]]=0;
		for(j=i+1;j<strSplit.length;j++){
			if(strSplit[i]==strSplit[j]){
				k=k+1;
			}		
		}
		arr[strSplit[i]]=k;
	}

	console.log(arr);


</script>