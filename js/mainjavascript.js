  let starter1 = "Before LOGGING";
  console.log(starter1);
  var newTypeBar;
  fetch("Curriculum/htmlBasic.json")
  .then(response => response.json())
  .then(json => {
    document.getElementById("starttest").innerHTML = json["Lesson1"]["Lesson101"];
  })

  window.onload = function(){
    $('#opencss').click(function(){
      $('#learningtocss').show();
    })
 
    
  }
console.log(typeof newbar);
  var learningObjects;
  // const req = new XMLHttpRequest();
  // req.open("GET", '../Curriculum/htmlBasic.json', true);
  // req.send();
  // req.onload = function(){
  //   const json = JSON.parse(req.responseText);
  //   learningObjects = JSON.stringify(json);
  // }

  



