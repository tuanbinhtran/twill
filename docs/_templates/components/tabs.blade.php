<div class="flex flex-col" x-data="{ activeTab: '{{$currenttab ?? ''}}' }">
    <div class="inline-flex mt-3 -mb-px">
        @foreach ($items ?? [] as $item)
            <button @click="activeTab = '{{$item}}'"
                    :class="{
                        'rounded-tr-lg': {{$loop->last ? 'true' : 'false'}},
                        'rounded-tl-lg': {{$loop->first ? 'true' : 'false'}},
                        'border-grey-500 !bg-gray-500 !text-white': activeTab === '{{$item}}'
                        }"
                    class="py-[10px] sm:py-2 mt-1 border-l border-t border-r px-[12px] sm:px-6 inline-flex items-center justify-center font-medium border border-gray-50 text-center focus:bg-primary text-black text-sm sm:text-base capitalize bg-gray-100"
            >
                {{$item}}
            </button>
        @endforeach
    </div>
    <div class="border px-4">
        {{$slot}}
    </div>
</div>