<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    <script src="scriptfun.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body style="background-image: linear-gradient(to right,#efd6a0,#d2ffea);">

  <div class="container text-center" style="border-width:7px;border-style:solid;border-color:#ff6f6f yellow lightblue lightgreen;margin-top:150px;padding:54px;background-color:white;">

    <div class="row">
      <div class="col-md-12">
        <h3 id="showh2" style="color:red;float:left;"></h3>
      </div>
     </div>

    <div class="row">
      <div class="col-md-4">
       <button id="gamebtn"class="form-control btn btn-warning" onclick="myFavGame();"> Favourite Game</button>
      </div>
      <div class="col-md-4">
       <input type="text" id="input1" placeholder="input 1" class="form-control"/>
      </div>
      <div class="col-md-4">
       <button onclick="input1Result();" class="form-control btn btn-danger">Submit</button>
      </div>
      </div>
      
     <div class="row">
      <div class="col-md-12">
        <h2 id="showh1">Show result of input 1 here</h2>
      </div>
     </div>

    <div class="row">
      <div class="col-md-2">
    <input type="text" id="input2" placeholder="input 2" class="form-control"/>
    <input type="text" id="input22" placeholder="replace word" class="form-control"/>
      </div>
       <div class="col-md-4">
    <button onclick="booleanResult();" class="form-control btn btn-success">Alert true or false if input 2 is present in input 1</button>
       </div>
        <div class="col-md-4">
    <button onclick="wordReplace();" class="form-control btn btn-success">Replace matching words of input1 from input 2</button>
        </div>
         <div class="col-md-2">
    <button onclick="totalLength();" class="form-control btn btn-success">length of input 1</button>
         </div>
      </div>
    <br />
    <br />

    <div class="row">
      <div class="col-md-3">
    <input type="text" id="input3" placeholder="Person 1 name" class="form-control"/>
      </div>
       <div class="col-md-3">
    <input type="text" id="input4" placeholder="Person 2 name" class="form-control"/>
       </div>
        <div class="col-md-3">
    <input type="text" id="input5" placeholder="Person 3 name" class="form-control"/>
        </div>
         <div class="col-md-3">
    <button onclick="literalMethod();" class="form-control btn btn-primary">Alert 3,4 & 5 with template literal</button>
         </div>
      </div>
    
     <div class="row">
      <div class="col-md-12">
       <h1 id="showage"></h1>
      </div>
     </div>

    <div class="row">
      <div class="col-md-6">
        <input type="number" class="form-control" placeholder="Enter Age" id="age"/>
      </div>
      <div class="col-md-6">
        <button onclick="checkAge();" class="form-control btn btn-primary">Check Age</button>
      </div>
    </div>

  </div>
    <script src="script.js"></script>
    <script src="scriptfun.js"></script>

</body>
</html>
