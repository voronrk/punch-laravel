<?php
echo "<pre>";
echo print_r($request->all(), true);
echo "</pre>";
?>
{{-- <img src=storage/app/public/{{ $pic1 }}> --}}
<img src={{ $pic1 }}>