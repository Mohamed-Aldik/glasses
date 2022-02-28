<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">

        <a href="{{ route('admin.product') }}" class="btn btn-success pull-right">كل المنتجات</a>

    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>

    @endif
    <form wire:submit.prevent="store">
    
     <label for="formGroupExampleInput6" class="form-label">صورة المنتج</label>
        <input type="file" class="input-file" id="formGroupExampleInput6" wire:model="image"  >
        @if ($image)
     <div>
        <img src="{{$image->temporaryUrl()}}" width="120" />
        </div>
        @endif
        @error('image')<p class="text-danger">{{$message}}</p>
        @enderror
    <label for="formGroupExampleInput" class="form-label">اسم الشركة</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم الشركة " wire:model="company">
        @error('company')<p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="formGroupExampleInput" class="form-label">اسم المنتج</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم المنتج " wire:model="name">
        @error('name')<p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="formGroupExampleInput" class="form-label"> وصف المنتج</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="وصف المنتج "
            wire:model="description">
        @error('description')<p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="formGroupExampleInput2" class="form-label">السعر</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="السعر"
            wire:model="regular_price">
        @error('regular_price')<p class="text-danger">{{ $message }}</p>
        @enderror
        <label for="formGroupExampleInput2" class="form-label">سعر الجملة</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="سعر الجملة"
            wire:model="wholesale_price">
        @error('wholesale_price')<p class="text-danger">{{ $message }}</p>
        @enderror
        <div class="form-group">
            <label for="exampleFormControlSelect1">اسم الفئة</label>
            <select wire:model="category_id" class="form-control" id="exampleFormControlSelect1">
                <option value="" hidden> اختر فئة </option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')<p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> إضافة منتج </button>
    </form>
</div>
