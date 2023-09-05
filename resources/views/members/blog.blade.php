@extends('members.layout.layout')

@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <div class="sm:flex sm:items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>

                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <a href="{{ route('member.create') }} " type="button"
                            class="block rounded-md bg-blue-500 px-3 py-2 text-center text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add
                            user</a>
                    </div>
                </div>

                @foreach ($posts as $post)
                    <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                        <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                            <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">

                                <img src={{ $post->post_img }} alt=""
                                    class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            </div>
                            <div>
                                <div class="flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at }} </time>
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                                </div>
                                <div class="group relative max-w-xl">
                                    <h3
                                        class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                        <a href="{{ route('post.show', ['id' => $post->id]) }} ">
                                            <span class="absolute inset-0"></span>
                                            {{ $post->post_title }}    
                                        </a>
                                    </h3>
                                    <p class="mt-5 text-sm leading-6 text-gray-600">
                                         {{ $post->post_sentence }} 
                                    </p>
                                </div>
                                <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                    <div class="relative flex items-center gap-x-4">
                                        <img src={{ $post->user_profile }} alt=""
                                            class="h-10 w-10 rounded-full bg-gray-50">
                                        <div class="text-sm leading-6">
                                            <p class="font-semibold text-gray-900">
                                                <a href="{{ route('post.show', ['id' => $post->id]) }} ">
                                                    <span class="absolute inset-0"></span>
                                                    {{ $post->member->name}}
                                                </a>
                                            </p>
                                            <p class="text-gray-600"> {{ $post->title }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
