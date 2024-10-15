<table class="table">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Father Name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
        <tr>
            <th scope="row"> {{$user->name}} </th>
            <td>{{$user->phone}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->father_name}}</td>
          </tr>
            
        @endforeach


    
    
    </tbody>
  </table>