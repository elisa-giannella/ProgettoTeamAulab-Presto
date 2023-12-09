<form action="{{route('set_language_locale', $lang)}}" method="POST" class="d-inline">
@csrf
<button type="submit" class="btn" style="" >
    <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg')}} " width="32" height="32" alt="">
    <span class="ms-1">
    @if($lang == 'en')
        English
    @elseif($lang == 'es')
        Español
    @else
        Italiano
    @endif
    </span>
</button>
</form>