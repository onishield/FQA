//week1
// console.log("Wongsathorn Charoenkul");
// console.log("5722771110");

//#3
// const number1 = 5;
// const number2 = 10.0;
// console.log(number2-number1);
// console.log(typeof(number1));
//
// console.log(null==undefined);
// console.log(!!true);
// console.log(!!!true);
// console.log(!!!1);
// console.log(!!undefined);

//#4
// const myObject={a:1,b:2};
// console.log(myObject['a']);
// console.log(myObject['b']);
// console.log(myObject);
//
// const myObject2 = myObject;
// myObject['a']=999;
// console.log(myObject['a'],myObject2['a']);


//#5
// const b = 777;
//
//
// var a = 3 ;
// for(let a=0;a<2;a++){
//   console.log(a);
// }
// {
//   let a=999;
//   console.log(a);
// }
// {
//   console.log(a);
// }

//#6
// const fn1 =(a) =>a*3;
// function fn2(a){
//   return a/5;
// }
//
// let fn3 = function(a,b){
//   return a+b;
// }
//
// console.log(fn3(fn1(fn1(2)),fn1(fn2(10))));

//#7
// const recurAdd = (a) => {
//   if(a==0) return 0;
//   return recurAdd(a-1)+a;
// }
//
// setTimeout(()=>{
//   console.log(recurAdd(10));
// },1000);
//
//
// setTimeout(()=>{
//   console.log(recurAdd(5));
// },100);
//
// setTimeout(()=>{
//   console.log(recurAdd(1));
// },1);


//#8
// function sumAll(...num){
//   var total=0;
//   for(var i=0;i<num.length;i++){
//     total+=num[i];
//
//   } return total;
// }
//
// console.log(sumAll(1,2,3,4,5,6));
// console.log(sumAll(1,2,3,4,5,6));
//
// function power({base=1,power=2}={}){
//   return Math.pow(base,power);
// }
//
// console.log(power());
// console.log(power({}));
// console.log(power({base: 3,power: 10}));

//#9
// let number ="39.67";
// let numToWord={
//   "1":"one",
//   "2":"two",
//   "3":"three",
//   "4":"four",
//   "6":"six",
//   "7":"seven",
//   "9":"nine",
//   ".":"dot"
// }
//
// for(var i=0;i<number.length;i++){
//   console.log(numToWord[number[i]]);
// }

//#10
// let input="Hello world hello hello earth earth";
// //let input ="We accept the love we think we deserve."
// let output = input.toLowerCase();
// let arr = output.split(" ");
//
// var obj={};
//
// for(var i=0;i<arr.length;i++){
//   if(obj[arr[i]]==null){
//     obj[arr[i]]=1;
//   }else{
//     obj[arr[i]]+=1;
//   }
//
// }
//
// console.log(obj);

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

//week2
//#1
// function plus(value){
//   return value+1;
// }
//
// let test = {
//   'a':1,
//   'b': 'Hello',
//   plus: plus,
//   plus2(value){
//     return value+2;
//   },
//   plus3: function(value){
//     return value+3;
//   }
// }
//
// console.log(test.plus(test.a));
// console.log(test.plus2(test.a));
// console.log(test.plus3(test.a));

//#2
// let arr =[1,2,3,4,5,6,7,8,9,10];
// delete arr[1];
// console.log(arr);
//
// arr.splice(3,2);
// console.log(arr);
//
// arr.splice(3,2,'a','b','c','d','e');
// console.log(arr);
// console.log(arr.slice(-1));

//#3
// function addNumberToArray(array,number){
//   return array.map(x => x+number);
// }
// console.log(addNumberToArray([1,2,3],5));
// console.log(addNumberToArray([1,2,3],1));

//#4
// let arr = [9,8,7,6,5,4,3,2,1,0,'a','b','c'];
// arr.sort();
// console.log(arr);
// arr.reverse();
// console.log(arr);
//
// let arr2d = [[4,5,6],[1,2,3],[7,8,9]];
// console.log(arr2d[1][1]);
// arr2d.sort();
// console.log(arr2d);
// arr2d.reverse();
// console.log(arr2d);

//#5
// let arr = [1,2,3,4,5];
// let newarr = arr.map(function(x){return x*2});
// console.log(newarr);
//
// newarr = arr.map((x)=>{return x*2});
// console.log(newarr);
//
// newarr = arr.map(x=>x*2);
// console.log(newarr);
//
// newarr = arr.reduce((x,y)=>x+y);
// console.log(newarr);

//#6
// let arr = [1,2,3,4,5];
// let newarr = arr.find(x=>x>3);
// console.log(newarr);
//
// newarr = arr.findIndex(x=>x>3);
// console.log(newarr);
//
// newarr = arr.filter(x=>x>3);
// console.log(newarr);
//
// newarr = arr.fill(1);
// console.log(newarr);

//#7
// console.log(convertFromCelsiusToFahrenheit(37));
// function convertFromCelsiusToFahrenheit(cel){
//   return cel*9/5+32;
// }

//#8
// let star = 7;
// let str='';
// for(let i=0;i<star;i++){
//   for(let l=0;l<=i;l++){
//     str+='*';
//   }
//   str+='\n';
// }
// console.log(str+'Above is a triangle of size 7.');

//#9
// const E = 2.71828182;
// console.log(`E = ${E.toFixed(3)}`);
// console.log(`6+9 = ${6+9}`);
// console.log(`Floor of 6.666+9.99999 = ${Math.floor(6.666+9.99999)}`);
// console.log(`${parseInt(3.3)+parseFloat(3.3)}`);
//
// let small = 'Small';
// console.log(small.toLowerCase());
// console.log(small.toUpperCase());
//
// console.log(`This is ISIS in Istanbul!!` .indexOf(`is`));
// console.log(`This is ISIS in Istanbul!!` .indexOf(`IS`));
// console.log(`This is ISIS in Istanbul!!` .search(`is`));
// console.log(`This is ISIS in Istanbul!!` .search(/is/i));
//
// console.log(`This is ISIS in ${small} Istanbull!!` .replace(`is`,`++`));
// console.log(`This is ISIS in ${small} Istanbull!!` .replace(/is/,`++`));
// console.log(`This is ISIS in ${small} Istanbull!!` .replace(/is/g,`++`));
// console.log(`This is ISIS in ${small} Istanbull!!` .replace(/is/ig,`++`));

//#10
// let arr1 = [1,2,3];
// let arr2 = ['a','b','c'];
// let arr3 = [3,4,5];
// console.log(merge2array(arr1,arr2));
// console.log(merge2array(arr1,arr3));
//
// function merge2array(arr1,arr2){
//   return [...arr1,...arr2];
// }

//#11
// let array2d = [[1,2,3],[4,5,6],[7,8,9]];
// console.log(convert2dto1dWithoutLoop(array2d));
//
// function convert2dto1dWithoutLoop(array2d){
//  let array1d=[];
//  array1d= array2d.reduce((x,y)=>[...x,...y]);
//
//   return array1d;
// }

//extra
// var array =[];
// function check(str){
//
//   for(i=0;i<str.length;i++){
//     if (str[i]=='(' || str[i]=='{' || str[i]=='['){
//       array.push(str[i]);
//     }
//
//     if(str[i]==')' || str[i]=='}' || str[i]==']'){
//       var pop =array.pop();
//
//         if(pop =='(' && str[i]==')' ){
//           if(array.length==0){
//             console.log("1");
//             return true;
//             break;
//           }
//         }
//
//         else if(pop =='[' && str[i]==']' ){
//           if(array.length==0){
//             console.log("2");
//             return true;
//             break;
//           }
//
//         }
//
//         else if(pop =='{' && str[i]=='}' ){
//           if(array.length==0){
//             console.log("");
//             return true;
//             break;
//           }
//         }
//
// 
//         else{
//           return false;
//           break;
//         }
//
//       }
//
//   }
//    if(array==[]){
//
//     }
//     else{
//       return false;
//     }
// }
//
// let text = "({})()";
// console.log(array);
// console.log(text,check(text));
