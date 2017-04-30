@extends('layouts.app')



@section('content')





             @if (Auth::user()->admin)
              <br><br><br><br>
              <center>
              <img align="" class="fb-image-profile thumbnail responsive" src="https://render.bitstrips.com/v2/cpanel/10212367-281901098_5-s1-v1.png?transparent=1&palette=1" alt="Profile image example"/>
              </center>
              <br>
        
      <div class="container-fluid">
  <div class="row">

    <div class="col-lg-12 col-lg-2">
      <nav class="navbar navbar-default">
      
        <ul class="nav navbar-nav">
        
           <li><a href="#">Posts: <span class="badge">{{App\User::count()}}</span></a></li>
           <li><a href="#">Comments: <span class="badge">{{App\Comment::count()}} </span></a></li>
           <li><a href="#">Members: <span class="badge">{{App\User::count()}}</span></a></li>
            
      </nav>
      </center>
    </div>
    <div class="col-sm-9 col-lg-10">
      <!-- your page content -->
<div class="tab">
  <button class="tablinks" id="defaultOpen" onclick="openCity(event, 'London')">Posts</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Comments</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Blog</button>
</div>

<div id="London" class="tabcontent" >

<iframe src="blog/admin" width="1204px" height="500px"  frameBorder="0" frameScroll="0" >
    
    </iframe>
  

</div>

<div id="Paris" class="tabcontent">


    <iframe src="/blog/admin/comment" width="1100px" height="500px"  frameBorder="0" >
    
    </iframe>
     
    
     

  
</div>


<div id="Tokyo" class="tabcontent">
  <iframe src="/blog" width="1204px" height="500px"  frameBorder="0" frameScroll="0" >
    
    </iframe>
</div>
<script>
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";


}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>


    </div>
  </div>
</div>







    <br>
    




            
            @else
             <center>
            <img class="thumbnail responsive" src ="https://render.bitstrips.com/v2/cpanel/9281517-281901098_5-s1-v1.png?transparent=1&palette=1">
           <h1>Now you have ability to disscouse</h1></center>
           
             @endif
<ul class="nav nav-pills nav-stacked">
  
</ul>
             


        </div>
    </div>
</div>
@endsection
