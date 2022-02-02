<div class="container" style="padding: 30px 0">


    <div class="alert alert-dark" role="alert">
        <a href="{{ route('admin.add.category') }}" class="btn btn-success pull-right"> إضافة فئة </a>
        @error('file') <span class="error">{{ $message }}</span> @enderror

    </div>
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
        </div>

    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th></th>
                <th scope="col">اسم الفئة</th>
                <th scope="col">الخيارات</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            @foreach ($categories as $category)


                <tr>
                    <td> {{ $count }}</td>
                    <td> {{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.edit.category', ['id' => $category->id]) }}">
                            <i class="fa fa-edit fa-2x"> </i>
                        </a>
                        <a href="#"
                            onclick="confirm('Are you sure, You want to delete this lense ?') || event.stopImmediatePropagation()"
                            wire:click.prevent="deleteCategory({{ $category->id }})" style="margin-left:10px">
                            <i class="fa fa-times fa-2x text-danger"> </i>
                        </a>
                    </td>
                </tr>
                <?php $count++; ?>
            @endforeach
        </tbody>
    </table>

</div>
