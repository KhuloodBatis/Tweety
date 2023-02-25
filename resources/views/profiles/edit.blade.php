<x-app>

    <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

 <div class="mb-6">
   <label for="name"
   class="block mb-2 font-blod uppercase text-xs text-gray-700">
   Name
   </label>
   <input
   class="border border-gray-400 p-2 w-full"
   type="text"
   name="name"
     id="name"
     value={{$user->name}}
     required
     placeholder=""
     >
   @error('name')
       <p class="text-red-500 text-xs mt-2">{{$message}}</p>
   @enderror
 </div>

 <div class="mb-6">
    <label for="username"
    class="block mb-2 font-blod uppercase text-xs text-gray-700">
    Userame
    </label>
    <input
    class="border border-gray-400 p-2 w-full"
    type="text"
    name="username"
      id="username"
      value={{$user->username}}
      required
      placeholder=""
      >
    @error('username')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="avatar"
    class="block mb-2 font-blod uppercase text-xs text-gray-700">
    Avatar
    </label>
    <div class="flex">
    <input
    class="border border-gray-400 p-2 w-full"
    type="file"
    name="avatar"
      id="avatar"
      value={{$user->avatar}}
      placeholder=""
      >
      <img src="{{$user->avatar}}" alt="yor avatar" width="40px">
    </div>
    @error('avatar')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
  </div>


  <div class="mb-6">
    <label for="email"
    class="block mb-2 font-blod uppercase text-xs text-gray-700">
    email
    </label>
    <input
    class="border border-gray-400 p-2 w-full"
    type="email"
    name="email"
      id="email"
      value={{$user->email}}
      required
      placeholder=""
      >
    @error('email')
        <p class="text-red-500 text-xs mt-2">{{$message}}</p>
    @enderror
  </div>

    <div class="mb-6">
        <label for="password"
        class="block mb-2 font-blod uppercase text-xs text-gray-700">
        Password
        </label>
        <input
        class="border border-gray-400 p-2 w-full"
        type="password"
        name="password"
          id="password"
          required
          placeholder=""
          >
        @error('password')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password_confirmation"
        class="block mb-2 font-blod uppercase text-xs text-gray-700">
        Password Confirmation
        </label>
        <input
        class="border border-gray-400 p-2 w-full"
        type="password"
        name="password_confirmation"
          id="password_confirmation"
          required
          placeholder=""
          >
        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-4">
          <button
          type="submit"
          class="bg-blue-500 rounded py-2 px-4 hover:bg-blue-300 border border-gray-500">Submit</button>

          <a href="{{$user->path()}}" class="bg-blue-500 border border-gray-500 rounded py-2 px-5 hover:bg-blue-300">Cancel</a>
      </div>
    </form>
</x-app>
