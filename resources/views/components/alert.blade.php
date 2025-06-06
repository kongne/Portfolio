@php
if(session()->has($type)) {
    alert(session($type), '', $type)->showConfirmButton('Confirm')->autoClose(3000);
}
@endphp
