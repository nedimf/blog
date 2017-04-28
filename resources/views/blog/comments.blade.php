@extends("blog.master")

@section ("content")


  

    @foreach ($comy as $comment)
    
    
    
     
     <div class="list-group">
     <ul>
     <li class="list-group-item">
     <img src="http://neokino.me/wp-content/themes/neokino/css/komentari.gif" width="50px" height="50px">
     <br>
     <b>Comment id: </b> {{$comment->id}}
     <br><b>Post id: </b>{{$comment->post_id}}
     <br><b>Comment author: </b>{{$comment->author}}
     <br><b>Comment content: </b><br>{{$comment->content}}
     <br><b>Comment created at: </b>{{$comment->created_at}}
     <br><b>Comment updated at: </b>{{$comment->updated_at}}
     
     
     <a href="/blog/admin/comment/delete/{{$comment->id}}"><button class="btn btn-danger pull-right">Destroy</button></a>
     
     </li>

     
     </ul>
    
     </div>



     
    
     @endforeach


    
    <center>
    <footer>
    <h4>Nedim &copy {{date('Y')}}</h4>
    </footer>
    </center>


@endsection