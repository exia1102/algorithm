<script type="text/javascript">
	
	var str="aaabccddd";
	var a="abcdefghijklmnopqrstuvwxyz"
	var strArr=str.split('');
	var aArr=a.split('');
	var temp=[];
	var isCorrect;
	var result="";
	for(i=0;i<strArr.length-1;i=i+2){
		temp[0]=(strArr[i]);
		temp[1]=(strArr[i+1]);
		for(j=0;j<aArr.length;j++){
			if(temp[0]==aArr[j]&&temp[1]==aArr[j+1]){
				isCorrect=true;
				break;
			}else{
				isCorrect=false;
			}
		}
		if(isCorrect==false){
			strArr[i]='';
			strArr[i+1]='';
		}
	}
	for(i=0;i<strArr.length;i++){
		result=result+strArr[i];
	}
	console.log(result);
		




</script>