<link rel="stylesheet" href="/admin/list.css" />
<script src="/admin/list.js" defer></script>

<ul class="list">
  <div class="list__title">{{$title}}</div>
  <div class="list__description">{{$slot}}</div>

  <ul class="list__items">
    @foreach($items as $li)
      <li>{!! $li !!}</li>
    @endforeach
  </ul>
</ul>