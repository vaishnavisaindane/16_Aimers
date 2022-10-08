body {
                font-family: 'Nunito', sans-serif;
                background-image:url(back.jfif);
                background-color: #cccccc;
                background-repeat: no-repeat;
                 background-attachment: fixed;
                background-position: center;
                background-size: cover;
                /*height:500px;
                width:500px;*/
            }

            <h1 style="padding:0px;">Book My Bus</h1>
            <div class="container-fluid" style="background-color:white;margin:0px;padding:0px;">


 <form method="POST" action="{{ route('login') }}">


  $(document).on('click', '#add', function(){
 //  var book_id = $('#book_id').text();
 //  var dept_name = $('#dept_name').text();
 //  var dept_status = $('#dept_status').val();
 //  if(book_id != '' && dept_name != ''&& dept_status != '')
 //  {
 //   $.ajax({
 //    url:"{{ route('dept_livetable.add_data') }}",
 //    method:"POST",
 //    data:{book_id:book_id,dept_name:dept_name,dept_status:dept_status,_token:_token},
 //    success:function(data)
 //    {
 //     $('#message').html(data);
 //     fetch_data();
 //    }
 //   });
 //  }
 //  else
 //  {
 //   $('#message').html("<div class='alert alert-danger'>All Fields are required</div>");
 //  }
 // });              