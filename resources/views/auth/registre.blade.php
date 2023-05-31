@extends('layouts.app')
@section('title', 'Registre')

@section('content')

<div class ="block mx-auto my-12 p-8 bg-white w-1/3 border-gray-200
rounded-lg shadow-lg">
<h1 class="text-3xl text-center font-bold">Registre</h1>
<form class="mt-4" method="POST" action=""> 
@csrf
<input type="tex" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="name" 
id="name" name="name">

@error('name')
<p class="borde border-red-500 rounded-md bg-red-100 w-full
text-red-600 p-2 my-2" >* {{$message}}</p>
@enderror
<input type="email" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="email" 
id="email" name="email">
@error('email')
<p class="borde border-red-500 rounded-md bg-red-100 w-full
text-red-600 p-2 my-2" >* {{$message}}</p>
@enderror

<input type="password" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="password" 
id="password" name="password">
@error('password')
<p class="borde border-red-500 rounded-md bg-red-100 w-full
text-red-600 p-2 my-2" >* {{$message}}</p>
@enderror
<input type="password" class="border border-gay-200 rounded-md bg-gay-200 w-full
tex-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="password confirmation" 
id="password_confirmation" name="password_confirmation">

<button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
text-white font-semibold p-2 my-3 hover:bg-indigo-600 ">Send</button>

</form>
</div>
@endsection