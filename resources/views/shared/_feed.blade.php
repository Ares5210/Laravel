@if(count($feed_items) > 0)
  <ol class="statuses">
	@foreach($feed_items as $status)
		@include('statuses._status', ['user' => Auth::user()])
	@endforeach
  </ul>

  {!! $feed_items->render() !!}
@endif