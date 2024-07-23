@extends('layouts.app', ['user' => $user])



@section('content')
    <div class="grid grid-cols-1 gap-4 lg:gap-6">
        <!-- Work Experience -->
        <div class="group rounded-2xl bg-white px-6 pt-0 shadow dark:bg-black dark:shadow-dark">
            <h3 class="relative z-10 bg-white pb-2 pt-6 text-2xl font-semibold dark:bg-black dark:text-light">
                Work Experience
            </h3>

            <div
                class="max-h-[200px] space-y-4 overflow-hidden pb-6 pt-4 [&::-webkit-scrollbar-thumb]:bg-gray-400 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar]:w-0">
                <div class="animate-scrollY space-y-4 group-hover:[animation-play-state:paused]">

                    @foreach ($user->experiences as $e)
                        <div class="flex flex-col gap-1 md:flex-row md:gap-10">
                            <p class="mt-1 text-sm font-medium text-muted dark:text-light/70">
                                {{ $e->start_year }} - {{ $e->end_year }}
                            </p>
                            <div class="flex items-center gap-3">
                                <div class="grid h-8 w-8 shrink-0 place-content-center rounded-lg bg-light dark:bg-dark-2">
                                    <img src="{{ asset('storage/' . $e->company_logo) }}" alt="" class="h-5 w-5" />
                                </div>
                                <div class="">
                                    <h6 class="text-base font-semibold text-dark dark:text-light/70">
                                        {{ $e->company }}
                                    </h6>
                                    <p class="text-sm text-muted">
                                        {{ $e->function }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @if (count($user->experiences) > 1)
                    <div class="animate-scrollY space-y-4 group-hover:[animation-play-state:paused]">

                        @foreach ($user->experiences as $e)
                            <div class="flex flex-col gap-1 md:flex-row md:gap-10">
                                <p class="mt-1 text-sm font-medium text-muted dark:text-light/70">
                                    {{ $e->start_year }} - {{ $e->end_year }}
                                </p>
                                <div class="flex items-center gap-3">
                                    <div
                                        class="grid h-8 w-8 shrink-0 place-content-center rounded-lg bg-light dark:bg-dark-2">
                                        <img src="{{ asset('storage/' . $e->company_logo) }}" alt=""
                                            class="h-5 w-5" />
                                    </div>
                                    <div class="">
                                        <h6 class="text-base font-semibold text-dark dark:text-light/70">
                                            {{ $e->company }}
                                        </h6>
                                        <p class="text-sm text-muted">
                                            {{ $e->function }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>

        <!-- Expertise -->
        <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
            <h3 class="text-2xl font-semibold dark:text-light">My Expert Area</h3>

            <div class="mt-6 grid grid-cols-2 gap-4 md:grid-cols-3">
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/figma.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Figma
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/notion.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Notion
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/mico.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Mico
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/framer.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Framer
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/webflow.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Webflow
                    </p>
                </div>
                <div class="text-center">
                    <div class="grid place-content-center rounded-lg bg-light p-3 dark:bg-dark-2">
                        <img src="assets/img/zeplin.svg" alt="" class="h-8 w-8" />
                    </div>
                    <p class="mt-1 text-base font-medium text-dark dark:text-light/70">
                        Zeplin
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Projects -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-2xl font-semibold dark:text-light">Recent Projects</h3>
            <a href="portfolio.html"
                class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
                <span>All Projects</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                    <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5" />
                </svg>
            </a>
        </div>

        <div class="mt-6 space-y-6">
            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0">
                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                    <img src="assets/img/project-1.png" alt=""
                        class="h-full w-full rounded-t-lg object-cover object-top transition" />

                    <a href="assets/img/project-1.png" data-gall="project-gallry-1"
                        class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                        </svg>
                    </a>
                </div>

                <div class="absolute inset-x-0 bottom-0 flex flex-wrap gap-2 bg-gradient-to-t from-black/20 p-4">
                    <span class="rounded bg-white px-2 py-1 text-xs font-medium text-primary shadow">
                        Product Design
                    </span>
                </div>
            </div>
            <div class="group relative overflow-hidden rounded-lg bg-light p-4 pb-0 dark:bg-dark-2 md:p-6 md:pb-0">
                <div class="relative aspect-6/4 overflow-hidden rounded-t-lg">
                    <img src="assets/img/project-2.png" alt=""
                        class="h-full w-full rounded-t-lg object-cover object-top transition" />

                    <a href="assets/img/project-2.png" data-gall="project-gallry-2"
                        class="project-gallery-link absolute left-1/2 top-1/2 grid h-10 w-10 -translate-x-1/2 -translate-y-1/2 place-content-center rounded-full bg-white text-primary shadow-lg transition lg:invisible lg:-translate-y-[40%] lg:opacity-0 lg:group-hover:visible lg:group-hover:-translate-y-1/2 lg:group-hover:opacity-100">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                            <path d="M10 4.167v11.666M4.167 10h11.666" />
                        </svg>
                    </a>
                </div>

                <div class="absolute inset-x-0 bottom-0 flex flex-wrap gap-2 bg-gradient-to-t from-black/20 p-4">
                    <span class="rounded bg-white px-2 py-1 text-xs font-medium text-primary shadow">
                        Product Design
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2">
        <div class="flex flex-wrap items-center justify-between gap-2">
            <h3 class="text-2xl font-semibold dark:text-light">Services I Offered</h3>
            <a href="services.html"
                class="inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
                <span>See All Services</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                    <path d="M4.167 10h11.666m-4.999 5 5-5m-5-5 5 5" />
                </svg>
            </a>
        </div>

        <div class="mt-6 grid grid-cols-2 gap-6 md:grid-cols-4">
            <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                        <path
                            d="M8 13.333A5.333 5.333 0 0 1 13.333 8h37.334A5.333 5.333 0 0 1 56 13.333v37.334A5.333 5.333 0 0 1 50.667 56H13.333A5.333 5.333 0 0 1 8 50.667V13.333ZM40 8 8 40M25.334 8l-16 16M53.333 9.333 38.667 24M24 40 10.666 53.333" />
                        <path d="M56 24H24v32" />
                    </svg>
                </div>
                <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                    UI UX Design
                </p>
            </div>
            <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                        <path
                            d="M26.666 18.667A5.333 5.333 0 0 1 32 13.333h16a5.333 5.333 0 0 1 5.333 5.334v26.666A5.333 5.333 0 0 1 48 50.667H32a5.333 5.333 0 0 1-5.334-5.334V18.667Zm-8 0v26.666m-8-24v21.334" />
                    </svg>
                </div>
                <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                    Mobile App
                </p>
            </div>
            <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                        <path
                            d="M10.666 13.333a2.667 2.667 0 0 1 2.667-2.666h37.334a2.667 2.667 0 0 1 2.666 2.666v5.334a2.667 2.667 0 0 1-2.666 2.666H13.332a2.666 2.666 0 0 1-2.667-2.666v-5.334Zm0 21.334A2.667 2.667 0 0 1 13.333 32H24a2.667 2.667 0 0 1 2.666 2.667v16A2.667 2.667 0 0 1 24 53.333H13.333a2.666 2.666 0 0 1-2.667-2.666v-16ZM37.334 32h16m-16 10.667h16m-16 10.666h16" />
                    </svg>
                </div>
                <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                    Product Design
                </p>
            </div>
            <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                        <path
                            d="M36.214 36.773a15.982 15.982 0 0 1 1.12 5.894A15.86 15.86 0 0 1 32 54.56a15.814 15.814 0 0 1-10.666 4.107c-8.827 0-16-7.174-16-16 0-7.36 5.013-13.6 11.786-15.44" />
                        <path
                            d="M46.88 27.227c6.773 1.84 11.787 8.08 11.787 15.44 0 8.826-7.174 16-16 16A15.814 15.814 0 0 1 32 54.56" />
                        <path d="M16 21.333a16 16 0 1 0 32 0 16 16 0 0 0-32 0Z" />
                    </svg>
                </div>
                <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                    Branding
                </p>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark">
        <marquee behavior="scroll" direction="left"
            class="overflow-hidden text-nowrap rounded-lg bg-light p-3 text-lg font-medium text-muted dark:bg-dark-2">
            Available For Hire 🚀 Crafting Digital Experiences 🎨 Available For Hire 🚀
            Crafting Digital Experiences 🎨
        </marquee>

        <h2 class="mt-4 text-[40px] font-semibold leading-snug text-dark dark:text-light">
            Let's👋 <br />
            Work Together
        </h2>

        <a href="contact.html"
            class="mt-6 inline-flex items-center justify-center gap-2 border-b text-center text-base text-primary transition hover:border-b-primary dark:border-b-muted dark:hover:border-b-primary">
            <span>Let's Talk</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="none" stroke="currentColor"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                <path d="M17.5 11.667v-5h-5" />
                <path d="m17.5 6.667-7.5 7.5-7.5-7.5" />
            </svg>
        </a>
    </div>
@endsection
