<div class="flex flex-col justify-between items-start pb-12 border-b w-full gap-12 ">

    <span class="text-2xl font-semibold  ">
        Udogodnienia
    </span>
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-8 xl:gap-x-20 gap-y-8  lg:w-full md:opacity-0 opacity-animation">

        @foreach ($amenities as $item)
            <div
                class="border flex justify-start items-center p-4 gap-4 pl-6 sm:pl-12 hover:shadow-lg duration-300 group">
                <img src="{{ asset($item['icon']) }}" alt=""
                    class="w-10 group-hover:scale-105 duration-300"><span>{{ $item['name'] }}</span>
            </div>
        @endforeach
    </div>
</div>