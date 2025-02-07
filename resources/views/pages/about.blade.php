@extends('layouts.app')



@section('content')
    <!-- about -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
            <div class="">
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                    Hi, This Is <span class="text-primary">{{ $user->name }}</span> 👋
                </h2>
                <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">
                    A Passionate
                    <span class="font-semibold text-dark dark:text-white">
                        Full Stack Developer
                    </span>
                    🖥️ &
                    <span class="font-semibold text-dark dark:text-white">
                        Product Designer
                    </span>
                    having
                    <span class="font-semibold text-dark dark:text-white">
                        {{ $user->experience_years }} {{ $user->experience_years == 1 ? 'year' : 'years' }}
                    </span>
                    of Experiences
                </p>
            </div>
            <div
                class="flex items-center justify-center gap-2 whitespace-nowrap rounded-lg bg-light px-4 py-2 text-center text-base font-medium leading-none text-primary dark:bg-dark-2 lg:text-lg">
                <span class="relative flex h-2 w-2 shrink-0">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-primary opacity-75 dark:bg-light"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-primary"></span>
                </span>
                <span>Available For Hire</span>
            </div>
        </div>

        <div class="mt-8 flex flex-wrap justify-between gap-6 lg:mt-12 lg:gap-10">
            <div class="flex flex-wrap items-start gap-6 lg:gap-10">
                <div class="">
                    <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $user->experience_years }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Year of Experience</p>
                </div>
                <div class="">
                    <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $user->projects_count }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Project Completed</p>
                </div>
                {{-- we should also deal with this clients --}}
                <div class="">
                    <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                        <span>{{ $user->client_number }}</span>+
                    </h2>
                    <p class="mt-2 text-muted">Happy Client</p>
                </div>
            </div>

            <div class="relative -mt-6 hidden h-[100px] w-[100px] p-4 lg:block xl:-mt-10">
                <img src="assets/img/circle-text.svg" alt=""
                    class="absolute inset-0 h-full w-full animate-spin-slow dark:hidden" />
                <img src="assets/img/circle-text-light.svg" alt=""
                    class="absolute inset-0 hidden h-full w-full animate-spin-slow dark:block" />
                <div class="grid h-full w-full place-content-center rounded-full bg-primary text-light">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="h-10 w-10">
                        <path d="M20 5v30m-5-5 5 5 5-5" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- skills -->
        <div class="mt-10 lg:mt-14">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                My Expert Area ✨
            </h3>
            {{-- <div
                class="mt-8 grid grid-cols-[repeat(auto-fit,_minmax(60px,1fr))] gap-2 lg:grid-cols-[repeat(auto-fit,_minmax(80px,1fr))] lg:gap-4">
                <div
                    class="grid h-16 place-content-center rounded-lg bg-light p-3 dark:bg-dark-2 lg:h-20 lg:rounded-2xl lg:p-4">
                    <img src="assets/img/notion.svg" alt="" class="h-8 w-8 lg:h-10 lg:w-10" />
                </div>

            </div> --}}
            <div
                class="mt-8 grid grid-cols-[repeat(auto-fit,_minmax(60px,1fr))] gap-2 lg:grid-cols-[repeat(auto-fit,_minmax(80px,1fr))] lg:gap-4">
                @foreach ($user->skills as $skill)
                    <div class="text-center">
                        <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                            <img src="{{ asset('storage/' . $skill->logo) }}" alt="" class="h-8 w-8" />
                        </div>
                        <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                            {{ $skill->name }}
                        </p>
                    </div>
                @endforeach


            </div>
        </div>

        <!-- Reviews -->
        @if ($user->client_number >= 1)
            <div class="mt-10 lg:mt-14">
                <div class="flex flex-wrap items-center justify-between gap-6">
                    <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">

                        Trusted By {{ $user->client_number }} {{ $user->client_number == 1 ? 'Client' : 'Clients' }}
                    </h3>

                    <div class="flex items-center gap-2">
                        <button
                            class="review-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5" />
                            </svg>
                        </button>
                        <button
                            class="review-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                                <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5" />
                            </svg>
                        </button>
                    </div>
                </div>
                @if ($user->reviews_count > 0)
                    <div class="mt-8">
                        <div class="swiper review-carousel">
                            <div class="swiper-wrapper">

                                @foreach ($user->reviews as $review)
                                    <div class="swiper-slide">
                                        <div
                                            class="flex h-full flex-col justify-between rounded-lg bg-light p-6 dark:bg-dark-2">
                                            <div class="flex flex-wrap items-center justify-between gap-4">
                                                <!-- stars -->
                                                <div class="flex flex-wrap items-center gap-1">

                                                    <img src="assets/img/star-full.svg" alt=""
                                                        class="h-4 w-4 shrink-0" />
                                                    <img src="assets/img/star-full.svg" alt=""
                                                        class="h-4 w-4 shrink-0" />
                                                    <img src="assets/img/star-full.svg" alt=""
                                                        class="h-4 w-4 shrink-0" />
                                                    <img src="assets/img/star-full.svg" alt=""
                                                        class="h-4 w-4 shrink-0" />
                                                    <img src="assets/img/star-full.svg" alt=""
                                                        class="h-4 w-4 shrink-0" />
                                                </div>

                                                <a href="{{ $review->url }}" target="_blank"
                                                    class="inline-flex items-center gap-2 rounded bg-white px-2 py-1 text-sm leading-none text-primary transition hover:bg-primary hover:text-white dark:bg-black">
                                                    <span>preview</span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15"
                                                        fill="none" stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" class="h-3.5 w-3.5 shrink-0">
                                                        <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                                    </svg>
                                                </a>
                                            </div>

                                            <blockquote class="mt-6 flex-1 text-lg">
                                                "{{ $review->content }}
                                            </blockquote>

                                            <p class="mt-8 font-medium">

                                                <span class="font-normal text-muted">
                                                    {{ $review->client_name }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                @endif


            </div>
        @endif



        <!-- Awards -->
        <div class="mt-10 lg:mt-14">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                Awards and Recognitions
            </h3>

            <div class="mt-8 space-y-4">
                @foreach ($user->certificates as $c)
                    <div
                        class="group relative grid grid-cols-1 items-center gap-4 rounded-lg border border-transparent bg-light p-6 transition hover:border-light hover:bg-white dark:bg-dark-2 dark:hover:border-primary dark:hover:bg-black md:grid-cols-4 xl:gap-10">
                        <div class="flex flex-col gap-4 md:col-span-2 md:flex-row md:items-center md:gap-6">
                            <div
                                class="grid h-10 w-10 shrink-0 place-content-center rounded-lg bg-white transition group-hover:bg-light dark:bg-black dark:group-hover:bg-dark-2">
                                <img src="{{ asset('storage/' . $c->logo) }}" alt="" class="h-6 w-6 shrink-0" />
                            </div>
                            <div class="">
                                <h5
                                    class="font-medium leading-tight text-dark dark:text-light xl:text-lg xl:leading-tight">
                                    {{ $c->name }}
                                </h5>
                                <p class="text-muted">{{ $c->duration }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 25" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                class="h-5 w-5 shrink-0">
                                <path d="M6 9.5a6 6 0 1 0 12 0 6 6 0 0 0-12 0Z" />
                                <path
                                    d="m12 15.5 3.4 5.89 1.598-3.233 3.598.232-3.4-5.889m-10.394 0-3.4 5.89L7 18.157l1.598 3.232 3.4-5.889" />
                            </svg>
                            <h5 class="font-medium leading-tight text-dark dark:text-light">
                                {{ $c->description }}
                            </h5>
                        </div>

                        <div class="text-right">
                            <a href="{{ $c->url }}"
                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-3 py-2 text-center text-sm leading-none text-dark transition after:absolute after:inset-0 after:h-full after:w-full after:content-[''] hover:bg-light hover:text-primary dark:bg-black dark:text-light/70 dark:hover:bg-dark-2 dark:hover:text-primary">
                                <span>View Project</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 15" fill="none"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-3.5 w-3.5 shrink-0">
                                    <path d="m9.917 4.583-5.834 5.834m.584-5.834h5.25v5.25" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>

        <!-- Blog -->
        <div class="mt-10 lg:mt-14">
            <div class="flex flex-wrap items-center justify-between gap-6">
                <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                    Article and Publications
                </h3>

                <div class="flex items-center gap-2">
                    <button
                        class="blog-carousel-button-prev grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                            <path d="M4.167 10h11.666M4.167 10l5 5m-5-5 5-5" />
                        </svg>
                    </button>
                    <button
                        class="blog-carousel-button-next grid h-9 w-9 place-content-center rounded-lg border border-muted/30 text-muted transition hover:border-primary hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5 shrink-0">
                            <path d="M4.167 10h11.666m-5 5 5-5m-5-5 5 5" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-8">
                <div class="swiper blog-carousel">
                    <div class="swiper-wrapper">
                        @foreach ($user->blogs as $blog)
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="relative">
                                        <a href="/blog/{{ $blog->id }}"
                                            class="group block aspect-6/4 overflow-hidden rounded-lg">
                                            <img src="{{ asset('/storage/' . $blog->image) }}" alt=""
                                                class="h-full w-full rounded-lg object-cover transition duration-700 group-hover:scale-105" />
                                        </a>

                                        <!-- Tags -->
                                        <div class="absolute bottom-4 left-4 flex flex-wrap gap-2">
                                            <a href="#"
                                                class="inline-flex items-center justify-center gap-2 rounded bg-white px-2 py-1 text-center text-xs leading-none text-primary shadow transition hover:bg-primary hover:text-white">
                                                {{ $blog->category->name }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="mt-6">
                                        <h2 class="text-xl font-medium xl:text-2xl">
                                            <a href="/blog/{{ $blog->id }}"
                                                class="inline-block text-dark transition hover:text-primary dark:text-light/70 dark:hover:text-primary">
                                                {{ $blog->title }}
                                            </a>
                                        </h2>

                                        <ul class="mt-4 flex flex-wrap items-center gap-2">
                                            <li
                                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">
                                                {{ $blog->read_time }} min read
                                            </li>
                                            <li
                                                class="relative text-sm text-muted/50 before:mr-1 before:content-['\2022'] dark:text-muted">

                                                {{ $blog->created_at->format('M j, Y') }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="mt-10 lg:mt-14">
            <div class="group flex gap-6 overflow-hidden rounded-lg bg-light p-6 dark:bg-dark-2">
                <div
                    class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                    <a href="contact.html"
                        class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                        Let's 👋 Work Together
                    </a>
                    <a href="contact.html"
                        class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                        Let's 👋 Work Together
                    </a>
                </div>
                <div
                    class="relative flex min-w-full shrink-0 animate-infinite-scroll gap-6 group-hover:[animation-play-state:paused]">
                    <a href="contact.html"
                        class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                        Let's 👋 Work Together
                    </a>
                    <a href="contact.html"
                        class="relative inline-block whitespace-nowrap text-3xl font-medium text-muted transition before:mr-3 before:content-['\2022'] hover:text-dark dark:text-muted dark:hover:text-white md:text-[40px]">
                        Let's 👋 Work Together
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
