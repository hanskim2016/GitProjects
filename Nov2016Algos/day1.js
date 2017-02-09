


stringWithBlanks = "here is a string with some blanks          yay";

function removeBlanks(str){

  var withoutBlanks = "";
  var numberOfSpaces = 0;

  for (var i = 0; i < str.length; i++){
    if (str[i] !== " " && str[i] !== "  "){
      withoutBlanks += str[i];

    } else {
      numberOfSpaces += 1;
    }
    console.log(withoutBlanks);
  }
  console.log(numberOfSpaces, 'number of spaces');
  console.log(withoutBlanks, " is the new string without blanks");
  return withoutBlanks;
}

var returnedValue = removeBlanks(stringWithBlanks);

console.log(returnedValue);
