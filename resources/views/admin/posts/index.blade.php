@extends('layouts.app')

@section('content')
  <div class="container">

  <table class="table">
     <thead>
        <tr>
           <th scope="col">#</th>
           <th scope="col">Titolo</th>
           <th scope="col">Azioni</th>
          
         </tr>
      </thead>
      <tbody>
          @foreach($posts as $post)

         <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>
                <a href="" class="btn btn-primary">Mpstra</a>
                <a href="" class="btn btn-warning">Modifica</a>
                <form action="" method="post" class="d-inline-block">
                   @method('DELETE')
                   <input type="submit" value="delete" class="btn btn-danger">

                </form>
            </td>
            
         </tr>
         @endforeach
   
      </tbody>
</table>


  </div>
@endsection