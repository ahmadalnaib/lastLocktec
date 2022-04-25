<div class="dropdown">
    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
     {{config('locales.languages')[app()->getLocale()]['name']}}
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      @foreach (config('locales.languages') as $key=>$val)

      @if ($key != app()->getLocale())
      <li><a class="dropdown-item" href="{{route('change.language',$key)}}">{{$val['name']}}</a></li>
      @endif

      @endforeach
    </ul>
  </div>
