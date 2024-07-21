@extends('layouts.app')





@section('content')
    <!-- Blog -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div class="">
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                My Recent Article and Publications
            </h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">
                I'm here to help if you're searching for a product designer to bring
                your idea to life or a design partner to help take your business to the
                next level.
            </p>
        </div>

        <!-- Blog -->
        <div class="mt-10 lg:mt-14">
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2">
                @foreach ($blogs as $blog)
                    <div class="">
                        <div class="relative">
                            <a href="/blog/{{ $blog->id }}" class="group block aspect-6/4 overflow-hidden rounded-lg">
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
                @endforeach


            </div>

            <!-- Pagination -->
            <nav class="mt-10 flex items-center justify-center gap-1.5">
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>

                    <span aria-hidden="true" class="sr-only">Previous</span>
                </button>
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary"
                    aria-current="page">
                    1
                </button>
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                    2
                </button>
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                    3
                </button>
                <div class="hs-tooltip inline-block">
                    <button type="button"
                        class="hs-tooltip-toggle group inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                        <span class="text-xs group-hover:hidden">•••</span>
                        <svg class="hidden h-5 w-5 flex-shrink-0 group-hover:block" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m6 17 5-5-5-5" />
                            <path d="m13 17 5-5-5-5" />
                        </svg>
                        <span
                            class="hs-tooltip-content invisible absolute z-10 inline-block rounded bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-slate-700"
                            role="tooltip">
                            Next 4 pages
                        </span>
                    </button>
                </div>
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                    100
                </button>
                <button type="button"
                    class="inline-flex min-h-9 min-w-9 items-center justify-center rounded-lg border border-light text-center text-dark transition hover:border-primary hover:text-primary focus:outline-none focus:ring-2 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-muted dark:hover:border-primary dark:hover:text-primary">
                    <span aria-hidden="true" class="sr-only">Next</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="h-4 w-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </nav>
            <!-- End Pagination -->
        </div>
    </div>
@endsection
