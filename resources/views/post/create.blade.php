
<!--enctype="multipart/form-data"   //to upload form-->
<form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">       

    @csrf   <!--to protect application from request to other website-->

      Title : 
      <input type="text" name="title">
      <br><br>
      Content : 
      <textarea name="content" id="" cols="30" rows="10"></textarea>&nbsp
      <br><br>
      Image : 
      <input type="file" name="image" id="">
      <br><br>
      <button type="submit">Save</button>
        

        
</form>