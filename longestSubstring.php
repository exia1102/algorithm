<script type="text/javascript">
	

	var s="abceeeddededed";
	var length = s.length;
 
 	var maxLength=0;
     
    var start = 0;
    var isRepeat;

	for (i = 0;i < length; i++) {
            for ( j = i+1; j < length; j++) {
                isRepeat = false;
                // 判断 该 字符 在 之前 子串中 是否 存在
                for (k = i; k < j; k++) {
                    if (s.charAt(k) == s.charAt(j)) {
                        isRepeat = true;
                    break;
                    }
                }
                // 如果 存储 跳出 循环 遍历 下一个 字符
                if (isRepeat == true) {
                    break;
                }
                // 如果 不存在 判断 并 更新
                else if(j - i > maxLength){
                  maxLength = j - i;
                    start = i;
                }
            }
        }
         console.log(s.substr(start, maxLength+1));







	// function chachong(str,low,high){
	// 	while(low<high){
	// 		if(str.charAt(low)==str.charAt(high)){
	// 			low++;high--;
	// 		}else{
	// 			return false;
	// 		}
	// 		return true; 
	// 	}
		


	// }








</script>