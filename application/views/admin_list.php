<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
?>

<table cols="" border="0">
  <tr>
    <th>ID</th>
    <th>Author</th>
    <th>Mugshot</th>
    <th>Their Saying</th>
  </tr>
  {quotes}
  <tr>
    <td>{id}</td>
    <td>{who}</td>
    <td>{mug}</td>
    <td>{what}</td>
  </tr>
  {/quotes}
</table>
