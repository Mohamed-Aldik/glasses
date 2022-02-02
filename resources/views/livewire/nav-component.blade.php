                             @if (isset($categories))

                                 @foreach ($categories as $category)
                                     <li class="menu-item">
                                         <a href="{{ route('category', ['id' => $category->id]) }}"
                                             class="link-term mercado-item-title">{{ $category->name }}</a>
                                     </li>
                                 @endforeach
                             @endif