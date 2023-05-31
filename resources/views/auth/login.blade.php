@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class ="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200
    rounded-lg shadow-lg">
  <h1 class="text-3xl text-center font-bold">Login</h1>
<form class="mt-4" method="POST" action=""> 
  @csrf
<input type="email" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" 
id="email" name="email">


<input type="password" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="password" 
id="email" name="password">


@error('message')
<p class="borde border-red-500 rounded-md bg-red-100 w-full
text-red-600 p-2 my-2" >* {{$message}}</p>
@enderror
<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
text-white font-semibold p-2 my-3 hover:bg-indigo-600 ">Send</button>



</p>
</form>
    </div>
@endsection