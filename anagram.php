<script type="text/javascript">
	
	var search="anagram";
	var str="anagrm";
	
	var searchArr=search.split('');
	var strArr=str.split('');

	for(i=0;i<searchArr.length;i++){
		temp=strArr[i];
		var isCorrect=false;
		for(j=0;j<strArr.length;j++){
			if(temp==strArr[j]){
				isCorrect=true;
				strArr[j]="";
				break;
			}
		}




		}
	console.log(isCorrect);






</script>