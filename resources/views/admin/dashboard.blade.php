<x-app-layout>
    @section('title', 'Work Category')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="medal-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $experiences->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm">
                    Experience
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="briefcase-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $works->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm">
                    Works
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="grid-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold text-dark">
                    {{ $events->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Events
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="document-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $blogs->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Blogs
                </p>
            </div>
        </div>

        <div class="shadow-md border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="book-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $materials->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Materials
                </p>
            </div>
        </div>

        <div class="shadow-lg border-2 bg-white rounded-2xl flex p-4">
            <div class="flex items-center justify-center mr-4">
                <ion-icon name="chatbubble-outline" class="w-10 h-10 text-dark"></ion-icon>
            </div>

            <div class="">
                <p class="flex items-center text-xl font-bold">
                    {{ $testimonials->count() }}
                </p>
                <p class="flex items-center text-xs 2xl:text-sm text-dark">
                    Testimonials
                </p>
            </div>
        </div>
    </div>

    <div class="mt-4 space-y-4">
        <h1 class="text-2xl font-bold mt-8 mb-4">Panduan</h1>
        <iframe src="https://scribehow.com/page-embed/Panduan_Dashboard_Website_WiwitAB__3WAdDN1KTw2gl6U8oGVm6w"
            width="100%" height="640" allowfullscreen frameborder="0"></iframe>
    </div>
</x-app-layout>
