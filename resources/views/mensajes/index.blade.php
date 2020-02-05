@extends('../layouts/app')
<table class="table table-hover">
    <thead>
      <tr  scope="col">
        <th scope="col">Usuario</th>
        <th scope="col">mensaje</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datos1 as $item)
      <tr>
        <td scope="col">{{ $item->usuario }}</td>
        <td scope="col">{{ $item->mensaje }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
<?php
header('refresh:3');
?>