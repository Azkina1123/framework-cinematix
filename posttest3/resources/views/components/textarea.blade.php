 <textarea name="{{ $name }}" id="{{ $id }}" rows="{{ $row }}"
     class="border border-tuna my-2 rounded-md px-2 py-1 outline-none" placeholder="{{ $placeholder }}"
     {{ isset($required) ? 'required' : '' }}> {{ isset($value) ? $value : '' }} </textarea>
