<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Medical college</th>
            <th scope="col">MBBS Year</th>
          </tr>
        </thead>
        <tbody>
            @php
            $x=1;
            @endphp
            @foreach($users as $data)
          <tr>
            <th scope="row">{{ $x++ }}</th>
            <td>{{ $data->name }}</td>
            <td>{{ $data->doctor_shower->medical_college }}</td>
            <td>{{ $data->doctor_shower->mbbs_year }}</td>
          </tr>
          @endforeach


          </tr>
        </tbody>
      </table>



   </div>


  </body>
</html>
