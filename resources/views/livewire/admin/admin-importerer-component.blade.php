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
          
@foreach ($importers as $importer)
        <tr>
            <td>{{ $importer->name }}</td>
            <td>{{ $importer->email }}</td>
            <td>{{ $importer->phone }}</td>
            <td> {{ $importer->approved == 0 ? "No" : "Yes"}} </td>
            <td>
             <a href="{{route('admin.edit.importer',['id'=>$importer->id])}}" >
                    <i class="fa fa-edit fa-2x"> </i>
                </a>
                <a href="#" onclick="confirm('Are you sure, You want to delete this Importer ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteImporter({{$importer->id}})" style="margin-left:10px" >
                    <i class="fa fa-times fa-2x text-danger"> </i>
                </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      
      {{-- {{$categories->links()}} --}}


</div>
