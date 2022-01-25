
<div class="container" style="padding: 30px 0">
    

    <div class="alert alert-dark" role="alert">
        <a href="{{route('admin.add.lens')}}" class="btn btn-success pull-right"> إضافة عدسة  </a>
           @error('file') <span class="error">{{ $message }}</span> @enderror
 
<form wire:submit.prevent="upload">

    <input type="file" wire:model="file">
                <div wire:loading wire:target="file">جاري التحميل </div>

    <button type="submit" class="btn btn-success">Save </button>

</form>
      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
      </div>

      @endif

    <table class="table table-bordered">
        <thead>
          <tr>
            <th></th>
            <th scope="col">اسم الشركة</th>
            <th scope="col">اسم العدسة</th>
            <th scope="col">SPH</th>
            <th scope="col">CYL</th>
            <th scope="col">Index</th>
            <th scope="col">خيارات العدسة</th>
            <th scope="col">سعر البيع</th>
            <th scope="col">سعر الجملة</th>
            <th scope="col">الخيارات</th>
          </tr>
        </thead>
        <tbody>
           <?php $count = 1; ?>
            @foreach ($lenses as $lens)


          <tr>
           <td> {{ $count }}</td>
            <td>{{$lens->company}}</td>
            <td>{{$lens->lens_name}}</td>
            <td>{{$lens->sph}}</td>
            <td>{{$lens->cyl}}</td>
            <td>{{$lens->index}}</td>
            <td>{{$lens->lens_option}}</td>
            <td>{{$lens->regular_price}}</td>
            <td>{{$lens->wholesale_price}}</td>
            <td>
                <a href="{{route('admin.edit.lens',['id'=>$lens->id])}}" >
                    <i class="fa fa-edit fa-2x"> </i>
                </a>
                <a href="#" onclick="confirm('Are you sure, You want to delete this lense ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteLens({{$lens->id}})" style="margin-left:10px" >
                    <i class="fa fa-times fa-2x text-danger"> </i>
                </a>
            </td>
          </tr>
          <?php $count++; ?>
          @endforeach
        </tbody>
      </table>

</div>
