@extends('members.layout.layout')

@section('content')
    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl">
            <div class="bg-gray-900 py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">Users</h1>
                            <p class="mt-2 text-sm text-gray-300">A list of all the users in your account including their
                                name, title, email and role.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{route('member.create')}} " type="button"
                                class="block rounded-md bg-indigo-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add
                                user</a>
                        </div>
                    </div>
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-700">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">
                                                Name</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">Title</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">Email</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-white">Role</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                                <span class="sr-only">Edit</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-800">
                                        @if ($members->count() < 0)
                                            <tr>
                                                <button type="button"
                                                    class="relative block w-full rounded-lg border-2 border-dashed border-gray-300 p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 14v20c0 4.418 7.163 8 16 8 1.381 0 2.721-.087 4-.252M8 14c0 4.418 7.163 8 16 8s16-3.582 16-8M8 14c0-4.418 7.163-8 16-8s16 3.582 16 8m0 0v14m0-4c0 4.418-7.163 8-16 8S8 28.418 8 24m32 10v6m0 0v6m0-6h6m-6 0h-6" />
                                                    </svg>
                                                    <span class="mt-2 block text-sm font-semibold text-gray-900">Ajoutez des
                                                        membres dans votre base de données</span>
                                                </button>
                                            </tr>
                                        @else
                                            @foreach ($members as $member)
                                                <tr>
                                                    <td
                                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-white sm:pl-0">
                                                        <a href="{{ route('member.show', ['id' => $member->id]) }} ">
                                                            {{ $member->name }}
                                                        </a>
                                                    </td>

                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                        {{ $member->title }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">
                                                        {{ $member->email }}
                                                    </td>
                                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-300">Member
                                                    </td>
                                                    <td
                                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                        <a href="{{route('member.edit', ['id' => $member->id])}}"
                                                            class="text-indigo-400 hover:text-indigo-300">Edit<span
                                                                class="sr-only">, Lindsay Walton</span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif


                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
