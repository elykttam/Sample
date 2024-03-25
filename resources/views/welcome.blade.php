<x-layout>
  <h1>Welcome, {{ $name }}</h1>
  <p>{{ $greetings }}</p>
</x-layout>

<?php 

function hello()
{
  echo 'Madam/Sir!';
}

?>

<!-- {{ hello() }} -->