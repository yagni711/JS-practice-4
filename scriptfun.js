 var a= document.getElementById('input1');
function input1Result(){
  var b=a.value;
  document.getElementById('showh1').innerHTML=b;
}
function booleanResult(){
  var b=a.value;
  var c= document.getElementById('input2').value;
  alert(b.includes(c));
}
function wordReplace(){
  var b=a.value;
  var c= document.getElementById('input2').value;
  var cc= document.getElementById('input22').value;
  document.getElementById('showh1').innerHTML=b.replaceAll(c,cc);
  //document.getElementById('showh1').innerHTML=b.replace(c,'');
}
function totalLength(){
  var b=a.value;
  var c= document.getElementById('input2').value;
  var d= b.replaceAll(c,'');
  alert('Length of Input1 Text Is : '+ b.length);
  alert('Length of Latest Text Is : '+ d.length);
}
function literalMethod(){
  var a= document.getElementById('input3').value;
  var b= document.getElementById('input4').value;
  var c= document.getElementById('input5').value;
  alert(`hello ${a} , ${b} and ${c}`);
}
function checkAge(){
  var a= document.getElementById('age').value;
  if(a<15){
    b='You Are Too Young';
    document.getElementById('showage').innerHTML=b;
  }
  else if(a==18){
     b='You Are Almost There';
    document.getElementById('showage').innerHTML=b;
  }
  else{
     b='Enjoy';
    document.getElementById('showage').innerHTML=b;
  }
}