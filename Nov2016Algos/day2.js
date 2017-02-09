

function getDigits(str){
  var result="";
  for (var idx = 0; idx < str.length; idx++){
    if (str[idx] >= "0" && str[idx] <= "9"){
      result += str[idx];
    }
  }
  console.log(typeof(result), result);
  return parseInt(result);
}


console.log(getDigits("1abc2def3ghi"));
