<nav class="fixed top-0 z-50 w-full bg-white border-b border-white  ">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm 2xl:text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200  -700 -600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="{{ route('admin.dashboard') }}" class="flex ml-2 md:mr-24">
                    {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" /> --}}
                    <span
                        class="self-center text-xs 2xl:text-sm font-semibold text-gray-600 sm:text-lg whitespace-nowrap">Admin
                        Panel</span>
                </a>
            </div>
            <div class="flex
                        items-center">
                <div class="flex items-center ml-3">
                    <div>
                        <button type="button"
                            class="flex text-sm 2xl:text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 -600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <div class="w-8 h-8 rounded-full bg-gray-50"></div>
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow  "
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm 2xl:text-sm text-gray-900  role="none">
                                {{ auth()->user()->name }}
                            </p>
                            <p class="text-sm 2xl:text-sm font-medium text-gray-900 truncate " role="none">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full text-start px-4 py-2 text-sm 2xl:text-sm text-gray-700 hover:bg-gray-100 -600"
                                        role="menuitem">Sign out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white ">
        <ul class="space-y-2">
            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Umum</p>
            <x-sidebar-menu name="Dashboard" icon="fas fa-home" route="{{ route('admin.dashboard') }}"
                active="{{ request()->routeIs('admin.dashboard') }}" />
            <x-sidebar-menu name="Message" icon="fas fa-envelope" route="{{ route('admin.message.index') }}"
                active="{{ request()->routeIs('admin.message.index') }}" />
            <x-sidebar-menu name="Partner" icon="fas fa-handshake" route="{{ route('admin.partner.index') }}"
                active="{{ request()->routeIs('admin.partner.index') }}" />
            <x-sidebar-menu name="Social Media" icon="fas fa-share-alt" route="{{ route('admin.social-media.index') }}"
                active="{{ request()->routeIs('admin.social-media.index') }}" />
            <x-sidebar-menu name="Testimonial" icon="fas fa-quote-right" route="{{ route('admin.testimonial.index') }}"
                active="{{ request()->routeIs('admin.testimonial.index') }}" />

            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Pengaturan Portofolio</p>
            {{-- <x-sidebar-menu name="Experience" icon="fas fa-briefcase" route="{{ route('admin.experience.index') }}"
                active="{{ request()->routeIs('admin.experience.index') }}" /> --}}
            <x-sidebar-menu name="Work" icon="fas fa-briefcase" route="{{ route('admin.work.index') }}"
                active="{{ request()->routeIs('admin.work.index') }}" />
            <x-sidebar-menu name="Work Category" icon="fas fa-sort" route="{{ route('admin.work-category.index') }}"
                active="{{ request()->routeIs('admin.work-category.index') }}" />

            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Blog</p>
            <x-sidebar-menu name="Blog" icon="fas fa-blog" route="{{ route('admin.blog') }}"
                active="{{ request()->routeIs('admin.blog') }}" />
            <x-sidebar-menu name="Blog Category" icon="fas fa-sort" route="{{ route('admin.blog-category.index') }}"
                active="{{ request()->routeIs('admin.blog-category.index') }}" />

            <x-sidebar-menu name="Consultation Request" icon="fas fa-comments"
                route="{{ route('admin.consultation-request.index') }}"
                active="{{ request()->routeIs('admin.consultation-request.index') }}" />
            <x-sidebar-menu name="Consultation Category" icon="fas fa-sort"
                route="{{ route('admin.consultation-request-category.index') }}"
                active="{{ request()->routeIs('admin.consultation-request-category.index') }}" />

            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Contact</p>

            <x-sidebar-menu name="Contact Page Setting" icon="fas fa-phone"
                route="{{ route('admin.contact-page-setting.index') }}"
                active="{{ request()->routeIs('admin.contact-page-setting.index') }}" />

            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Event</p>
            <x-sidebar-menu name="Event" icon="fas fa-calendar" route="{{ route('admin.event.index') }}"
                active="{{ request()->routeIs('admin.event.index') }}" />
            <x-sidebar-menu name="Event Category" icon="fas fa-sort"
                route="{{ route('admin.event-category.index') }}"
                active="{{ request()->routeIs('admin.event-category.index') }}" />


            <p class="px-3 py-3 text-xs 2xl:text-sm font-semibold text-gray-600 uppercase">Material</p>
            <x-sidebar-menu name="Material" icon="fas fa-book" route="{{ route('admin.material.index') }}"
                active="{{ request()->routeIs('admin.material.index') }}" />
            <x-sidebar-menu name="Material Category" icon="fas fa-sort"
                route="{{ route('admin.material-category.index') }}"
                active="{{ request()->routeIs('admin.material-category.index') }}" />
            <!-- Logout -->
            <li>
                <form action="{{ route('logout') }}" method="POST" class="cursor-pointer">
                    @csrf
                    <a class="flex items-center py-3 pl-6 nav-item hover:text-orange-400 rounded-md"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i
                            class="fas fa-sign-out-alt text-gray-600 w-4 h-4 transition duration-75  group-hover:text-orange-400 "></i>
                        <span class="ml-3 text-gray-600">
                            Keluar
                        </span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
