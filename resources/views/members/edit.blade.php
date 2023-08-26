@extends('members.layout.layout')

@section('content')
    <!--
                  This example requires some changes to your config:
                  
                  ```
                  // tailwind.config.js
                  module.exports = {
                    // ...
                    plugins: [
                      // ...
                      require('@tailwindcss/forms'),
                    ],
                  }
                  ```
                -->
    <form method="post" action="{{ route('member.update', ['id' => $member->id]) }} "
        class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 pt-12">
        @csrf
        @method('put')
        <div>
            <div class="border-b border-white/10 pb-12"></div>
            <div class="sm:flex sm:items-center sm:justify-between">
                <div>
                    <h2 class="text-base font-semibold leading-7 text-white">Personal Information</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-400">Modification des informations</p>
                </div>

                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button type="button"
                        class="block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                </div>
            </div>


            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm font-medium leading-6 text-white">Name</label>
                    <div class="mt-2">
                        <input value="{{ $member->name }}" type="text" name="name" id="name"
                            autocomplete="given-name"
                            class="px-4 block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
                    <div class="mt-2">
                        <input value="{{ $member->title }}" type="text" name="title" id="title"
                            autocomplete="family-name"
                            class="px-4 block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
                    <div class="mt-2">
                        <input value="{{ $member->email }}" id="email" name="email" type="email"
                            autocomplete="email"
                            class="px-4 block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="phone_number" class="px-4 block text-sm font-medium leading-6 text-white">Phone
                        number</label>
                    <div class="mt-2">
                        <input value="{{ $member->phone_number }}" id="phone_number" name="phone_number" type="text"
                            autocomplete="email"
                            class="px-4 block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="role" class="block text-sm font-medium leading-6 text-white">Role</label>
                    <div class="mt-2">
                        <select id="role" name="role" autocomplete="country-name"
                            class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 [&_*]:text-black">
                            <option>Member</option>
                            <option>User</option>
                            <option>Visitor</option>
                        </select>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="street-address" class="block text-sm font-medium leading-6 text-white">Street
                        address</label>
                    <div class="mt-2">
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address"
                            class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2 sm:col-start-1">
                    <label for="city" class="block text-sm font-medium leading-6 text-white">City</label>
                    <div class="mt-2">
                        <input type="text" name="city" id="city" autocomplete="address-level2"
                            class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="region" class="block text-sm font-medium leading-6 text-white">State / Province</label>
                    <div class="mt-2">
                        <input type="text" name="region" id="region" autocomplete="address-level1"
                            class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-2">
                    <label for="postal-code" class="block text-sm font-medium leading-6 text-white">ZIP / Postal
                        code</label>
                    <div class="mt-2">
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code"
                            class="block w-full rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>

    <form action="{{ route('member.delete', ['id' => $member->id]) }} " method="post"
        class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 pt-12">
        @csrf
        @method('delete')

        <div class="my-6 flex items-center justify-end gap-x-6">
            <a href="{{route('members')}} " type="button" class="text-sm font-semibold leading-6 text-white">Cancel</a>
            <button type="submit"
                class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</button>
        </div>
    </form>
@endsection
