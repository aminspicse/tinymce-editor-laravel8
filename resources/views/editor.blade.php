<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TinyMCE Editor</title>
    <!-- Vendor CSS Files -->
    <link href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">
</head>
<body>
    

    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
        @csrf
        <button class="btn btn-block btn-info md-3 md-offset-6">Save</button>
    <textarea name="description" rows="2" cols="40" class="form-control tinymce-editor"></textarea>
        
    </form>
</body>
<!-- Vendor JS Files -->
  <script src="{{asset('public/admin/vendor/tinymce/tinymce.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('public/admin/js/main.js')}}"></script>

</html>