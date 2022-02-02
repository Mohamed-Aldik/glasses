<div class="container" style="padding: 30px 0">
    <div class="alert alert-dark" role="alert">

        <a href="{{ route('admin.category') }}" class="btn btn-success pull-right">كل الفئات</a>

    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>

    @endif
    <form wire:submit.prevent="update">
        <label for="formGroupExampleInput" class="form-label">اسم الفئة</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="اسم الفئة "
            wire:model="name">
        @error('name')<p class="text-danger">{{ $message }}</p>
        @enderror  
        <button type="submit" href="" class="btn btn-primary" style="margin: 20px 0"> تعديل الفئة </button>
    </form>
</div>
