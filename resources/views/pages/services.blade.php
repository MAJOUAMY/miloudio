@extends('layouts.app')



@section('content')
    <!-- Services -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div class="flex flex-col-reverse items-start gap-6 lg:flex-row lg:gap-10">
            <div class="">
                <h2 class="text-3xl font-semibold text-dark dark:text-light lg:text-[40px]">
                    Services I <span class="text-primary">Offered</span>
                </h2>
                <p class="mt-4 text-lg text-muted dark:text-light/70 lg:mt-6 lg:text-2xl">
                    Transforming Ideas into Innovative Reality, Elevate Your Vision with
                    Our Expert
                    <span class="font-semibold text-dark dark:text-white">
                        Product Design and Development
                    </span>
                    Services!
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

        <!-- Service cards -->
        <div class="mt-10 grid grid-cols-2 gap-6 md:grid-cols-4 lg:mt-14">
            @foreach ($user->services as $service)
                <div class="rounded-2xl bg-light p-2 text-center dark:bg-dark-2 md:p-4">
                    <div class="grid place-content-center rounded-lg bg-white p-6 dark:bg-black">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="h-12 w-12 text-primary lg:h-16 lg:w-16">
                            <path
                                d="M8 13.333A5.333 5.333 0 0 1 13.333 8h37.334A5.333 5.333 0 0 1 56 13.333v37.334A5.333 5.333 0 0 1 50.667 56H13.333A5.333 5.333 0 0 1 8 50.667V13.333ZM40 8 8 40M25.334 8l-16 16M53.333 9.333 38.667 24M24 40 10.666 53.333" />
                            <path d="M56 24H24v32" />
                        </svg> --}}
                        <img src="{{ asset('storage/' . $service->logo) }}" alt="">
                    </div>
                    <p class="mt-3 text-base font-medium text-dark dark:text-light/70">
                        {{ $service->name }}
                    </p>
                </div>
            @endforeach


        </div>

        <!-- image -->
        <div class="mt-10 aspect-video overflow-hidden rounded-lg bg-light dark:bg-dark-2 lg:mt-14">
            <img src="assets/img/blog-img-1.jpg" alt="" class="h-full w-full rounded-lg object-cover" />
        </div>

        <!-- Brands -->
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

        <!-- FAQ -->
        <div class="mt-10 lg:mt-14">
            <h3 class="text-2xl font-medium text-dark dark:text-light lg:text-3xl">
                Frequently Asked Questions
            </h3>

            <div class="hs-accordion-group mt-8 space-y-4">

                @foreach ($user->questions as $question)
                    <div
                        class="hs-accordion rounded-lg border border-transparent bg-light transition hs-accordion-active:border-light hs-accordion-active:bg-white dark:border-transparent dark:bg-dark-2 dark:hs-accordion-active:border-dark-2 dark:hs-accordion-active:bg-black">
                        <button
                            class="hs-accordion-toggle inline-flex w-full items-center justify-between gap-x-3 px-6 py-5 text-start text-lg font-medium text-dark transition hover:text-muted disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-primary dark:text-light/70 dark:hover:text-light dark:focus:outline-none dark:hs-accordion-active:text-primary xl:text-2xl">
                            <span>{{ $question->content }}</span>
                            <span
                                class="grid h-8 w-8 shrink-0 place-content-center rounded bg-white text-primary hs-accordion-active:bg-light dark:bg-black dark:hs-accordion-active:bg-dark-2">
                                <svg class="block h-3.5 w-3.5 hs-accordion-active:hidden"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                    <path d="M12 5v14" />
                                </svg>
                                <svg class="hidden h-3.5 w-3.5 hs-accordion-active:block"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14" />
                                </svg>
                            </span>
                        </button>
                        <div class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300">
                            <div class="px-6 pb-5">
                                <p class="text-base xl:text-lg">
                                    {{ $question->response->content }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


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
