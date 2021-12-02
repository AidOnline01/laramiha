<link rel="stylesheet" href="/admin/counter.css" />
<script src="/admin/counter.js" defer></script>

<div class="counter" data-number="{{$number}}">
  <div class="counter__title">{{$title}}</div>
  <div class="counter__content">
    <button class="counter__button counter__button--less" data-minus>-</button>
    <div class="counter__number" data-number>{{$number}}</div>
    <button class="counter__button counter__button--more" data-plus>+</button>
  </div>
</div>