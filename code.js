 console.log("Wongsathorn Charoenkul");
 console.log("5722771110");

//#3
const number1 = 5;
const number2 = 10.0;
console.log(number2-number1);
console.log(typeof(number1));

console.log(null==undefined);
console.log(!!true);
console.log(!!!true);
console.log(!!!1);
console.log(!!undefined);

//#4
const myObject={a:1,b:2};
console.log(myObject['a']);
console.log(myObject['b']);
console.log(myObject);

const myObject2 = myObject;
myObject['a']=999;
console.log(myObject['a'],myObject2['a']);


//#5
const b = 777;


var a = 3 ;
for(let a=0;a<2;a++){
  console.log(a);
}
{
  let a=999;
  console.log(a);
}
{
  console.log(a);
}

//#6
const fn1 =(a) =>a*3;
function fn2(a){
  return a/5;
}

let fn3 = function(a,b){
  return a+b;
}

console.log(fn3(fn1(fn1(2)),fn1(fn2(10))));

//#7
const recurAdd = (a) => {
  if(a==0) return 0;
  return recurAdd(a-1)+a;
}

setTimeout(()=>{
  console.log(recurAdd(10));
},1000);


setTimeout(()=>{
  console.log(recurAdd(5));
},100);

setTimeout(()=>{
  console.log(recurAdd(1));
},1);


//#8
function sumAll(...num){
  var total=0;
  for(var i=0;i<num.length;i++){
    total+=num[i];

  } return total;
}

console.log(sumAll(1,2,3,4,5,6));
console.log(sumAll(1,2,3,4,5,6));

function power({base=1,power=2}={}){
  return Math.pow(base,power);
}

console.log(power());
console.log(power({}));
console.log(power({base: 3,power: 10}));

//#9
let number ="39.67";
let numToWord={
  "1":"one",
  "2":"two",
  "3":"three",
  "4":"four",
  "6":"six",
  "7":"seven",
  "9":"nine",
  ".":"dot"
}

for(var i=0;i<number.length;i++){
  console.log(numToWord[number[i]]);
}

//#10
let input="Hello world hello hello earth earth";
//let input ="We accept the love we think we deserve."
let output = input.toLowerCase();
let arr = output.split(" ");

var obj={};

for(var i=0;i<arr.length;i++){
  if(obj[arr[i]]==null){
    obj[arr[i]]=1;
  }else{
    obj[arr[i]]+=1;
  }

}

console.log(obj);

//#11
// let input="bananabanana";
// let output = input.toLowerCase();
// let arr = output.split("");
// var obj={};
// for(var i=0;i<arr.length;i++){
//   if(obj[arr[i]]==null){
//     obj[arr[i]]=1;
//   }else{
//     obj[arr[i]]+=1;
//   }
// }
// // console.log(obj);
// for(h in obj){
//   if(obj[h] == 1){
//     var value=h;
//     //  console.log(h);
//     break;
//   }
// }
// for(var y=0;y<output.length;y++){
//    if(output[y]==value){
//      console.log(input[y]);
//
//    }
//    else{}
// }
