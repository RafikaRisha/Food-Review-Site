<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Reviews</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style> 
    #animatedArea{
    background:linear-gradient(to left , #8942a8 , #ba382f);
    width:100%;
    height:100vh;
    }
      #box_area{
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        overflow:hidden;
        list-style:none;
        
      }
      #box_area li{
        position:absolute;
        display:block;
        list-style:none;
        width:25px;
        height:25px;
        background:rgba(255,255,155,0.2);
        animation:animate 20s linear  infinite; 
        bottom:-150px;       
      }
      #box_area li:nth-child(1){
        left:86%;
        width:80px;
        height:80px;
        animation-delay: 0s;
      }
      
      #box_area li:nth-child(2){
        left:2%;
        width:30px;
        height:30px;
        animation-delay: 1.5s;
        animation-duration:10s;
      }
      #box_area li:nth-child(3){
        left:32%;
        width:100px;
        height:100px;
        animation-delay: 2.5s;
      }
      #box_area li:nth-child(4){
        left:52%;
        width:80px;
        height:80px;
        animation-delay: 0s;
        animation-duration:10s;
      }
      #box_area li:nth-child(5){
        left:26%;
        width:20px;
        height:20px;
        animation-delay: 0s;
      }
      #box_area li:nth-child(6){
        left:72%;
        width:20px;
        height:20px;
        animation-delay: 3.5s;
        
      }
      
      #box_area li:nth-child(7){
        left:95%;
        width:20px;
        height:20px;
        animation-delay: 3.5s;
        
      }
      @keyframes animate{
        0%{
          transform:translateY(0) rotate(0deg);
          opacity:1;
        }
        100%{
          transform:translateY(-800px) rotate(360deg);
          opacity:0;
        }
      }
      #box{
          height:auto;
          width:80%;
          margin-left:10%;
          box-shadow:0px 0px 5px;
          background-color:white;
          border:1;
        }
        #tr{
          color:white;
        }
</style>
 
</head>
<body>
<ul id="box_area">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>

    </ul>
  <div>
    <nav class="navbar navbar-dark bg-dark">
    <a href="{{url('/index')}}">Back</a>
  <h2 class="navbar-brand" style="color:white;">Reviews</h2>
  <div align="center">
        <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Search for food names..">
  </div>
    <!-- <input class="form-control sm-12" type="text" id="search" name="search" placeholder="Search" aria-label="Search"> -->
    </nav>
  </div>
  
  <div  id="animatedArea">
    

  <nav >
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    
    <table class="table" id="myTable">
        <thead class="thead-dark">
            <tr>
                
                <th scope="col">Restaurant Name</th>
                <th scope="col">Food Name</th>
                <th scope="col">Area</th>
                <th scope="col">Comment</th>
                <th scope="col">Ratings</th>

            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
           
            <tr id="tr">
                
                <td>{{$review->restaurant_name }}</td>
                <td>{{$review->food_name}}</td>
                <td>{{$review->area}}</td>
                <td>{{$review->comment}}</td>
                <td>{{$review->ratings}}</td>
            </tr>
            
            @endforeach
        </tbody>
    </table>
   
  </nav>
</div>
 
 <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>