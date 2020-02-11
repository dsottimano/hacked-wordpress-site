(function(){
var msg = document.getElementById("testcase").getAttribute("message")
document.getElementById("testcase").innerText = msg.replace(/-/gi," ")
  })()