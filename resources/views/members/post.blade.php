@extends('members.layout.layout')

@section('content')
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-4xl">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">More info</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>

                <div class="mt-16 space-y-20 lg:mt-20 lg:space-y-20">
                    <article class="relative isolate flex flex-col gap-8 lg:flex-row">
                        <div class="relative aspect-[16/9] sm:aspect-[2/1] lg:aspect-square lg:w-64 lg:shrink-0">

                            <img src={{ $member->post_img }} alt=""
                                class="absolute inset-0 h-full w-full rounded-2xl bg-gray-50 object-cover">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                        </div>
                        <div>
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            </div>
                            <div class="group relative max-w-xl">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="{{ route('post.show', ['id' => $member->id]) }} ">
                                        <span class="absolute inset-0"></span>
                                        {{ $member->post_sentence }}
                                    </a>
                                </h3>
                                <p class="mt-5 text-sm leading-6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                                    eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                                    exercitationem placeat consectetur nulla deserunt vel iusto corrupti dicta laboris
                                    incididunt.</p>
                            </div>
                            <div class="mt-6 flex border-t border-gray-900/5 pt-6">
                                <div class="relative flex items-center gap-x-4">
                                    <img src={{ $member->user_profile }} alt=""
                                        class="h-10 w-10 rounded-full bg-gray-50">
                                    <div class="text-sm leading-6">
                                        <p class="font-semibold text-gray-900">
                                            <a href="{{ route('post.show', ['id' => $member->id]) }} ">
                                                <span class="absolute inset-0"></span>
                                                {{ $member->name }}
                                            </a>
                                        </p>
                                        <p class="text-gray-600"> {{ $member->title }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <!-- More posts... -->
                </div>

            </div>
        </div>
    </div>
@endsection
