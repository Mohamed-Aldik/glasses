
<div class="container" style="padding: 30px 0">
    

    <div class="alert alert-dark" role="alert">
       @if ($ids)

               <a href="#" onclick="confirm('Are you sure, You want to delete this products ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProducts" class="btn btn-danger"> حذف المنتجات المحددة   </a>
         

       @endif
        <a href="{{route('admin.add.product')}}" class="btn btn-success pull-right"> إضافة منتج  </a>
           @error('file') <span class="error">{{ $message }}</span> @enderror
 
      </div>
      @if (Session::has('message'))
      <div class="alert alert-success" role="alert">
          {{Session::get('message')}}
      </div>

      @endif

    <table class="table table-bordered">
        <thead>
          <tr>
            <th width="50px"><input type="checkbox" id="master"></th>
            <th scope="col">صورة المنتج</th>
            <th scope="col">اسم المنتج</th>
            <th scope="col">وصف المنتج</th>
            <th scope="col">سعر المبيع</th>
            <th scope="col">سعر الجملة</th>
            <th scope="col">الفئة</th>
              @if(auth()->user()->utype === "ADM")
            <th scope="col">اسم المورد</th>
            @endif
            <th scope="col">الخيارات</th>
          </tr>
        </thead>
        <tbody>
           <?php $count = 1; ?>
            @foreach ($products as $product)


          <tr  >
    
           <td> {{ $count }} <input type="checkbox" value="{{ $product->id }}" wire:model="ids"> </td>
            <td><img src="{{asset('assets/images/products')}}/{{$product->image}}" width="60"/></td>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->regular_price}}</td>
            <td>{{$product->wholesale_price}}</td>
            <td>{{$product->category_id}}</td>
             @if(auth()->user()->utype === "ADM")
            <td>{{$product->user->name}}</td>
            @endif
            <td>
                <a href="{{route('admin.edit.product',['id'=>$product->id])}}" >
                    <i class="fa fa-edit fa-2x"> </i>
                </a>
                <a href="#" onclick="confirm('Are you sure, You want to delete this product ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteProduct({{$product->id}})" style="margin-left:10px" >
                    <i class="fa fa-times fa-2x text-danger"> </i>
                </a>
            </td>
          </tr>
          <?php $count++; ?>
          @endforeach
        </tbody>
      </table>

</div>
