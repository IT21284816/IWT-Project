function cal()
{
  var time, Type, total,p;

  //document.getElementById("type").value =  p;
  
  time = parseInt(document.getElementById("time").value);
  Type = parseInt(document.getElementById("type").value);
  
  if(Type==1)
  {total = time * 100;
  document.getElementById("answer").value = total;}
  
  else if(Type==2){
  total = time * 200;
  document.getElementById("answer").value = total;}
  
  else if(Type==3){
  total = time * 300;
  document.getElementById("answer").value = total;}  
}