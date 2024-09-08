<h1>Welcome from test2</h1>
<ul>
  <h2>got to:</h2>
  <li><a href="/test0">test0 - only return</a></li>
  <li><a href="/test1">test1 - return view</a></li>
  <li><a href="{{ route('test2') }}">test2 - route & name</a></li>
  <li><a href="/test3/aya">test3 - arbitrary param</a></li>
  <li><a href="/test4/1212">test4 - best practice</a></li>
  <li><a href="/test4/142/dr4">test4 - 2 params</a></li>
  <li><a href="/test5">test5 - optional param (no param)</a></li>
  <li><a href="/test5/1212">test5 - optional param (pass param)</a></li>
  <li><a href="{{ route('test6', '1212') }}">test6 - param with regex</a></li>
  <li><a href="{{ route('test7', '1212') }}">test7 - params with regex & associative array</a></li>
  <li><a href="{{ route('test7', ['1212', 'aya']) }}">test7 - params with regex, associative array & optional params</a></li>
  <li>
    <a href="/tests/test">test8 - group routes</a>
    (
    <a href="{{ route('test8', '1212') }}">1</a>
    ,
    <a href="{{ route('admin.test.test8', ['1212', 'aya']) }}">2</a>
    )
  </li>
  <li>
    <a href="{{ route('admin.home') }}">test9 - group routes best practice</a>
    (
    <a href="{{ route('admin.test.home') }}">Home</a>
    ,
    <a href="{{ route('admin.test.test9.id', '1212') }}">1</a>
    ,
    <a href="{{ route('admin.test.test9.id_name', ['1212', 'aya']) }}">2</a>
    )
  </li>
</ul>