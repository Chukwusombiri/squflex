<x-user-layout>
    <!-- Navbar -->
    <x-user-nav page="dashboard" />
    <!-- cards -->
    <div class="futura-book w-full px-6 py-6 mx-auto">        
        <!-- row 1 -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- card1 -->
            <x-link-two href="{{route('user.deposit.pricingTable')}}" class="py-4 flex justify-center gap-2 flex-nowrap">                              
                Deposit funds
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 4.5 15 15m0 0V8.25m0 11.25H8.25" />
                </svg>    
            </x-link-two>
            <!-- card2 -->
            <x-link-two href="{{route('user.withdrawal.create')}}" class="py-4 flex justify-center gap-2 flex-nowrap">
                Withdraw income
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                </svg>                  
            </x-link-two>
            <!-- card3 -->
            <x-link-two href="{{route('user.deposit.pricingTable')}}" class="py-4 flex justify-center gap-2 flex-nowrap">
                Transfer funds
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                </svg>                  
            </x-link-two>
            <!-- card4 -->
            <x-link-two href="{{route('user.payment.create')}}" class="py-4 flex justify-center gap-2 flex-nowrap">
                Add wallet
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>                  
            </x-link-two>
        </div>
        <!-- row 2 -->
        <div class="mt-10 grid grid-cols-2 gap-4">
            <!-- card1 -->                        
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <h5 class="futura-medium mb-2 text-3xl">
                                    ${{ number_format(auth()->user()->acRoi) }}</h5>
                                <p class="sedan-regular-bold mb-0 text-2xl max-w-[70%]">
                                    Portfolio balance
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-14 h-14 flex items-center justify-center rounded-circle bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-cyan-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card2 
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <h5 class="futura-medium mb-2 text-3xl">
                                    ${{ number_format(auth()->user()->acRoi - auth()->user()->acBal) }}</h5>
                                <p class="sedan-regular-bold mb-0 text-2xl max-w-[70%]">
                                    Profits from trading
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-14 h-14 flex items-center justify-center rounded-circle bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-cyan-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- card3 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div class="w-full">
                                <h5 class="futura-medium mb-2 text-3xl">
                                    ${{ number_format(auth()->user()->acBal) }}</h5>
                                <p class="sedan-regular-bold mb-0 text-2xl max-w-[70%]">
                                    Active Deposited Amount
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-14 h-14 flex items-center justify-center rounded-circle bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-cyan-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card4 -->
            <div
                class="col-span-2 md:col-span-1 flex flex-col min-w-0 break-words bg-primary-lighter shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-1 p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <h5 class="futura-medium mb-2 text-3xl">${{ number_format(auth()->user()->perMonInt) }}
                                </h5>
                                <p class="sedan-regular-bold mb-0 text-2xl max-w-[70%]">
                                    Monthly earnings
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-14 h-14 flex items-center justify-center rounded-circle bg-primary-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor" class="w-8 h-8 text-cyan-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards row 3 -->        
        <div class="flex flex-wrap mt-10 -mx-3">
            <div class="w-full max-w-full px-3 mt-0">
                <div
                    class="relative flex flex-col min-w-0 mb-6 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="">Recent Transactions</h6>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        @if (count($newtransactions) > 0)
                            <div class="p-0 overflow-x-auto">
                                <table
                                    class="items-center w-full mb-0 align-top border-collapse text-slate-500">
                                    <tbody>
                                        @foreach ($newtransactions as $item)
                                            <tr class="">
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex px-2 py-1">
                                                        <div class="inline-block mr-4 text-center">
                                                            @if (isset($item->plan))
                                                                <span class="p-2 rounded bg-emerald-50"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6 text-emerald-500">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M19.5 13.5 12 21m0 0-7.5-7.5M12 21V3" />
                                                                    </svg></span>
                                                            @else
                                                                <span class="p-2 rounded bg-rose-50">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 24 24"
                                                                        stroke-width="1.5" stroke="currentColor"
                                                                        class="w-6 h-6 text-rose-500">
                                                                        <path stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18" />
                                                                    </svg>
                                                                </span>
                                                            @endif
                                                        </div>
                                                        <div class="flex flex-col justify-center">
                                                            <h6 class="mb-0 text-sm leading-normal">
                                                                ${{ number_format($item->amount) }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="text-lg mb-0 text-xs font-semibold leading-tight">
                                                        {{ $item->wallet }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <p
                                                        class="mb-0 text-xs font-semibold leading-tight">
                                                        {{ date('M d, Y', strtotime($item->created_at)) }}
                                                    </p>
                                                </td>
                                                <td
                                                    class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                                    <div class="flex items-center">
                                                        @if ($item->isApproved)
                                                            <span
                                                                class="futura-book text-emerald-400 bg-emerald-50 p-2 rounded-xl">approved</span>
                                                        @else
                                                            <span
                                                                class="futura-book text-yellow-600 bg-yellow-50 p-2 rounded-xl">pending</span>
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- footer --}}
        <x-user-footer />
    </div>    
</x-user-layout>
