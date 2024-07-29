@extends('layouts.app')





@section('content')
    <!-- Contact -->
    <div class="rounded-2xl bg-white p-6 shadow dark:bg-black dark:shadow-dark lg:col-span-2 lg:p-10">
        <div class="">
            <h2 class="text-3xl font-semibold leading-tight text-dark dark:text-light lg:text-[40px] lg:leading-tight">
                Let's 👋 <span class="text-primary">Work</span> Together
            </h2>
            <p class="mt-4 text-lg text-muted dark:text-light/70">
                I'm here to help if you're searching for a product designer to bring
                your idea to life or a design partner to help take your business to the
                next level.
            </p>
            <!-- CTA buttons -->
            <div class="mt-6 flex flex-wrap gap-2">
                <a href="#"
                    class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 font-medium text-white transition hover:bg-blue-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                        <path
                            d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Zm10 3a2 2 0 0 1 2 2m-2-6a6 6 0 0 1 6 6" />
                    </svg>
                    <span>Book A Call</span>
                </a>
                <button type="button" data-clipboard-text="shams.sujon.01@gmail.com" data-clipboard-action="copy"
                    data-clipboard-success-text="Copied to clipboard"
                    class="js-clipboard hs-tooltip inline-flex items-center gap-x-2 rounded-lg border border-light bg-transparent px-6 py-4 font-medium text-dark transition [--trigger:focus] hover:bg-light focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:text-light/70 dark:hover:bg-dark dark:hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-6 w-6">
                        <path d="M8 10a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-8a2 2 0 0 1-2-2v-8Z" />
                        <path d="M16 8V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2" />
                    </svg>
                    <span>Copy Email</span>

                    <span
                        class="hs-tooltip-content invisible z-10 hidden rounded-lg bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100 dark:bg-slate-700"
                        role="tooltip">
                        Copied to clipboard
                    </span>
                </button>
            </div>
        </div>

        <div class="mt-10 lg:mt-14">
            <form id="contact-form" method="post" action="assets/php/contact_email.php"
                class="space-y-6 rounded-lg bg-light p-6 dark:bg-dark-2 xl:p-12">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="">
                        <label for="name" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Name
                        </label>
                        <input required type="text" id="name" name="name" placeholder="Enter your name"
                            class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20" />
                    </div>
                    <div class="">
                        <label for="email" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Email
                        </label>
                        <input required type="email" id="email" name="email" placeholder="Enter your email"
                            class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20" />
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                    <div class="">
                        <label for="subject" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Subject
                        </label>
                        <input required type="text" id="subject" name="subject" placeholder="Subject"
                            class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20" />
                    </div>

                    <div class="">
                        <label for="budget" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                            Budget
                        </label>
                        <div class="relative">
                            <select
                                data-hs-select='{
                                "placeholder": "Select budget...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "relative flex w-full cursor-pointer text-nowrap rounded-lg border border-gray-200 bg-white px-6 py-4 pe-9 text-start text-base outline-none transition before:absolute before:inset-0 before:z-[1] focus:border-dark focus:ring focus:ring-dark/20 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20",
                                "dropdownClasses": "z-50 mt-2 max-h-[300px] w-full space-y-0.5 overflow-hidden overflow-y-auto rounded-lg border border-gray-200 bg-white p-1 dark:border-gray-700 dark:bg-slate-900",
                                "optionClasses": "w-full cursor-pointer rounded-lg px-4 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none dark:bg-slate-900 dark:text-gray-200 dark:hover:bg-slate-800 dark:focus:bg-slate-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 w-3.5 h-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                              }'
                                class="hidden" id="budget" name="budget" required>
                                <option value="">Choose</option>
                                <option>$5000</option>
                                <option>$5000 - $10000</option>
                                <option>$10000 - $20000</option>
                                <option>$20000+</option>
                            </select>

                            <div class="absolute end-3 top-1/2 -translate-y-1/2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    class="h-4 w-4 flex-shrink-0">
                                    <path d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="">
                    <label for="message" class="mb-2 block text-sm font-medium text-dark dark:text-light">
                        Message
                    </label>

                    <textarea required id="message" name="message" placeholder="Type details about your inquiry" rows="4"
                        class="block w-full rounded-lg border border-gray-200 bg-white px-6 py-4 text-base outline-none transition focus:border-dark focus:ring focus:ring-dark/20 disabled:pointer-events-none disabled:opacity-50 dark:border-dark dark:bg-black dark:text-white dark:focus:border-muted dark:focus:ring-white/20"></textarea>
                </div>

                <button type="submit"
                    class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-primary px-6 py-4 text-center font-medium text-white transition hover:bg-blue-600 focus:outline-none focus:ring disabled:pointer-events-none disabled:opacity-50">
                    <span>Send Message</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor"
                        stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" class="h-5 w-5">
                        <path d="M17.5 11.667v-5h-5" />
                        <path d="m17.5 6.667-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>

                <div class="status alert hidden"></div>
            </form>
        </div>

        <!-- Map -->
        {{-- <div class="mt-10 aspect-video overflow-hidden rounded-lg lg:mt-14">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.2527998699!2d-74.14448787425354!3d40.697631233397885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1706676940522!5m2!1sen!2sbd" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-full w-full object-cover"></iframe>
    </div> --}}
        <div class="mt-10 aspect-video overflow-hidden rounded-lg lg:mt-14">
            {!! $user->location !!}
            {{-- <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=grand%20casablanca+()&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                    href="https://www.gps.ie/">gps tracker sport</a></iframe> --}}
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
    </div>
@endsection
