<?php
echo "<pre>";
echo print_r($request->all(), true);
echo "</pre>";
?>
{{-- <img src=storage/app/public/{{ $pic1 }}> --}}
<img src={{ $pic1 }}>
<a href="img/1.html">aaaaa</a>
<a href="{{ $pic1 }}">bbbb</a>