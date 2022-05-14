
@if(empty($listing['id']))
  <p>No listings found</p>
@else
<h2>
  {{$listing['title']}}
</h2>
<p>
  {{$listing['description']}}
</p>
@endif
