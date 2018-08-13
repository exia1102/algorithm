
<script type="text/javascript">
    
var twoSum = function(nums, target) {
    let arr=[];

    for(i=0;i<nums.length;i++){
        for(j=i+1;j<nums.length;j++){
            if(nums[i]+nums[j]==target){
                arr.push(i);
                arr.push(j);
            }
        }
    }
    return arr;
       
};


console.log(twoSum([1,2,3,4,5,6,7],9));


</script>

