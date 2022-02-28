<div class="row" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">
       Manage Home Categories
      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
    {{Session::get('message')}}
    </div>

      @endif
      <form class="form-horizontal" wire:submit.prevent="updateHomeCategory">
        <label class="control-label">Choose Categories</label>
        <div wire:ignore>
          <select class="sel_categories form-control" name="categories[]" multiple="multiple" wire:model="selected_categories" >
            @foreach ( $categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
        <label for="formGroupExampleInput" class="form-label">No Of Products</label>
        <input type="text" class="form-control" id="formGroupExampleInput" wire:model="numberofproducts" >

        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> Save </button>
      </form>
    </div>

    @push('scripts')
    <script>
        $(document).ready(function(){
            $('.sel_categories').select2();
            $('.sel_categories').on('change',function(e){
                var data =$('.sel_categories').select2("val");
                @this.set('selected_categories',data);
            });
        });
    </script>

    @endpush
