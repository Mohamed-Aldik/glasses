<div class="container" style="padding: 30px 0">
   
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
      </div>

      @endif

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Approved</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
@foreach ($customers as $customer)
        <tr>
            <td>{{ $customer->name }}</td>
            <td>{{ $customer->email }}</td>
            <td>{{ $customer->phone }}</td>
            <td> {{ $customer->approved == 0 ? "No" : "Yes"}} </td>
            <td>
             <a href="{{route('admin.edit.customer',['id'=>$customer->id])}}" >
                    <i class="fa fa-edit fa-2x"> </i>
                </a>
                <a href="#" onclick="confirm('Are you sure, You want to delete this Customer ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteCustomer({{$customer->id}})" style="margin-left:10px" >
                    <i class="fa fa-times fa-2x text-danger"> </i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      
      {{-- {{$categories->links()}} --}}


</div>
