<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>

<div class="row">
  <div class="errors">{message}</div>
  <form action="/admin/confirm" method="post">
    {fid}
    {fwho}
    {fmug}
    {fwhat}
    {fsubmit}
  </form>
</div>
