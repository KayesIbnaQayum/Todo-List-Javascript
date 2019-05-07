<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
  .lineThrough{
    text-decoration: line-through;
  }
</style>
<body>
  
<div class="container" style="padding:10px; background-color:white;">

<div class="row top_wall_paper" style="background-image:url('img/banner.jpg'); height:300px;    background-size:     cover; ">
  <p id="date" style="position:relative; top:80%; float:right; padding:10px; color:white; font-size:2em;">asdasd</p>
</div>

<div class="row" style="padding-top:10px">

  <div class="col-sm-11"> 
   
     <input id="add_input" type="text" placeholder="add to do" class="form-control">
  </div>
  
  <button id="add_btn" class="col-sm-1">
  <i class="fa fa-2x fa-plus-circle"></i>
  </button>
</div>


<ul id="myList" class="list-group" style="padding-top:10px">
  <li class="list-group-item" >
  <i id="circle_check" class="far fa-circle" job="done"></i>
  <span id="todo_text" class='text'>asdads</span>
  
  <button type="button" id="delete_btn" job="delete" class="btn btn-danger fas fa-trash" style="float:right; position:relative; top:-7px"></button>
  </li>
</ul>


</body>
<script src="main.js"></script>
</html>
