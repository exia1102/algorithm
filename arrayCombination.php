<script type="text/javascript">
	var arr={'2':'abc','3':'def','4':'ghi','5':'jkl','6':'mno','7':'pqrs','8':'tuv','9':'wxyz'}
	var result=[];
	var shuru='23';
	var value1;
	var value2;

	for(var i in arr){
		if(i==shuru.charAt(0)){
			value1=arr[i];
		}
		if(i==shuru.charAt(1)){
			value2=arr[i];
		}
	}
	for(i=0;i<value1.length;i++){
		let d=value1.charAt(i);
		for(j=0;j<value2.length;j++){
			var shuchu=d+value2.charAt(j);
			result.push(shuchu);
		}
		
	}
	console.log(result);




</script>