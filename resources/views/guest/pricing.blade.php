<x-app-layout>
    {{-- hero --}}
    <section class="md:h-[60vh] py-8 md:py-24 bg-primary-dark">
        <div class="h-full flex flex-col justify-center items-center px-4 md:px-10">
            <h1 class="sedan-regular-bold text-3xl md:text-6xl w-[50%] max-w-xl mx-auto mb-4 md:mb-10 text-center">Pricing & benefits</h1>
            <p class="text-center text-md md:text-2xl max-w-3xl mx-auto">
                Whether you’re just starting out or you’re an experienced investor, we’re here to help. And as your wealth grows, so do your benefits.
            </p>
        </div>
    </section>
    {{-- plans --}}
    <section class="md:min-h-screen pt-0 pb-16 md:py-24 bg-primary-white">
        <div class="flex flex-wrap px-4 md:px-10">
            @if (count($plans)>0)
                @foreach ($plans as $p => $plan)
                    @php
                        $text = '';
                        $bgColor = '';
                        switch ($p) {
                            case 0:
                                $bgColor = 'bg-gray-700 hover:bg-gray-800';
                                $text = 'Get started with simple, low-fee investment package';
                                break;
                            case 1:
                                $bgColor = 'bg-slate-700 hover:bg-slate-800';
                                $text = 'Make the most of your investment with low fees and tailored advice';
                                break;
                            case 2:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Build your legacy with expert guidance from your dedicated team of advisors';
                                break;
                            default:
                                $bgColor = 'bg-neutral-700 text-primary-light hover:bg-neutral-800';
                                $text = 'Always stay ahead of the curve with innovative and state-of-the-art data analysis';
                                break;
                        }
                    @endphp
                    <div class="w-full px-3 md:px-6 lg:w-1/3" id="{{$plan->name}}">
                        <div class="rounded-lg md:rounded-xl p-6 mb-6 shadow-lg border border-gray-300 hover:shadow-xl transition duration-300 ease-in-out transform hover:-translate-y-2">
                            <div class="w-full flex flex-col">
                                <h2 class="sedan-regular-bold text-3xl mb-4 md:mb-6">{{$plan->name}}</h2>
                                <p class="mb-4 md:mb-6">{{$text}}</p>
                                <div class="flex items-center mb-4 md:mb-6">
                                    <span class="{{$bgColor}} inline-flex items-center py-2 px-4 rounded-full shadow">
                                        <span class="sedan-regular text-2xl">{{ round($plan->perMonInt,1) }}%</span>
                                        <span class="ml-2">after {{ $plan->duration }} day{{($plan->duration>1) ? 's' : '' }}</span>
                                    </span>
                                </div>
                                <div class="flex items-center mb-4">
                                    <span class="sedan-regular text-2xl font-bold">Minimum: ${{ number_format($plan->min) }}</span>                                
                                </div>
                                <div class="flex items-center mb-6">
                                    <span class="sedan-regular text-2xl font-bold">Maximum: ${{ number_format($plan->max) }}</span>                                
                                </div>
                                <p class="futura-medium text-lg mb-4">Benefits</p>
                                @if ($plan->features!==null || $plan->features!=="")
                                @foreach (json_decode($plan->features,true) as $item)
                                    <div class="flex items-start mb-px md:mb-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 md:w-6 md:h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                            </svg>
                                        </span>
                                        <span class="ml-2">{{$item}}</span>
                                    </div>
                                @endforeach
                                @endif
                                <div class="flex justify-start mt-6">
                                    @if (auth()->check())
                                        @if ((auth()->user()->plan_id!==null && auth()->user()->plan_id===$plan->id) || auth()->user()->plan_id===null)
                                            <x-link-one href="{{route('user.deposit.pricingTable')}}">Deposit</x-link-one>
                                        @endif 
                                        @if (auth()->user()->plan_id!==null && auth()->user()->plan_id!==$plan->id)
                                            <x-link-one href="{{route('user.deposit.pricingTable')}}">Upgrade</x-link-one>
                                        @endif                                
                                    @else
                                        <x-link-one href="{{route('user.deposit.pricingTable')}}">Deposit</x-link-one>
                                    @endif                                
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </section>    
    {{-- features --}}
    <section class="md:min-h-screen py-16 md:py-24 bg-gray-800 text-primary-light">
        <div class="px-6 md:px-16 grid grid-cols-1 md:grid-cols-5 gap-6 justify-center">
            <div class="col-span-1 md:col-span-3">
                <h2 class="text-3xl md:text-6xl sedan-regular max-w-xl">What you get — <br><span class="text-teal-600">no matter</span> what</h2>
            </div>
            <div class="col-span-1 md:col-span-2">
                <div class="flex flex-col mb-6 md:mb-10">
                    <h4 class="futura-medium text-md md:text-2xl tracking-wider flex gap-4 flex-nowrap">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-8 w-8 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>
                        Unmatched returns
                    </h4>
                    <p class="text-md md:text-2xl mt-2">At {{ $appName }}, we combine data-driven insights with expert financial strategies to deliver returns that consistently outperform the market. Our smart approach ensures your investments work harder and grow faster—so you can achieve more with confidence.</p>
                </div>
                <div class="flex flex-col mb-6 md:mb-10">
                    <h4 class="futura-medium text-md md:text-2xl tracking-wider flex gap-4 flex-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-8 w-8 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>Trading made simple</h4>
                    <p class="text-md md:text-2xl mt-2">Our easy-to-use system, <span class="underline">knowledge base</span> and team of friendly humans are here to help. We’re with you from your first deposit, making your first funds withdrawal, all the way to retirement.</p>
                </div>
                <div class="flex flex-col mb-6 md:mb-10">
                    <h4 class="futura-medium text-md md:text-2xl tracking-wider flex gap-4 flex-nowrap"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                            fill="currentColor" class="h-8 w-8 text-teal-600">
                            <path
                                d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                            </path>
                        </svg>Effortless money management</h4>
                    <p class="text-md md:text-2xl mt-2">Auto-reinvest your returns, cumulatively increase your returns by directly investing a portion of your portion and get expert financial advise at zero-cost. These features are always working in the background to help you move closer to your goals.</p>
                </div>
            </div>
        </div>
    </section>    
    {{-- contact --}}
    <section class="md:min-h-screen py-16 md:py-24 bg-primary-white">
        <div class="grid grid-cols-1 md:grid-cols-4 items-center gap-6 px-6 md:px-10">
            <div class="col-span-1 md:col-span-2">
                <h2 class="sedan-regular text-3xl md:text-6xl mb-4 w-full md:max-w-[85%]">
                    Bring your wealth to a <span class="text-teal-600">better place</span>
                </h2>
                <p class="text-md md:text-2xl mb-4 md:mb-10 w-full md:max-w-[85%]">
                    Our team will get to know you and your financial goals, then help you make the move to crypto trading with{{config('app.name')}}.
                </p>
                <div class="flex">
                    <x-link-one href="{{route('contact')}}">Speak to us</x-link-one>
                </div>
            </div>
            <div class="col-span-1 md:col-span-2">
                <x-cia />            
            </div>
        </div>
    </section>    
    {{-- cta --}}
    <section class="md:h-screen py-16 md:py-24 bg-slate-800 text-primary-light">
        <div class="h-full flex flex-col px-6 md:px-10 justify-center items-center">
            <h2 class="text-4xl md:text-6xl mb-8 text-center sedan-regular max-w-xl">
                Start investing in minutes
            </h2>
            <p class="text-lg md:text-xl text-center mb-8 max-w-xl">
                Open an account, make a deposit, and put your money to work.
            </p>
            <div class="flex justify-center">
                <x-link-two href="{{route('user.deposit.pricingTable')}}" class="py-4">Get started today</x-link-two>
            </div>
        </div>
    </section>    
    {{-- reviews --}}    
    <section class="py-16">
        <div class="text-primary-light pt-8" id="reviews">

            <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-10">
        
                <div class="mb-10">
                    <h2 class="sedan-regular text-4xl md:text-5xl max-w-xl">
                        Read some reviews from <span class="text-teal-600">our clients</span>
                    </h2>
                </div>
        
        
                <div class="md:columns-2 lg:columns-3 gap-8 space-y-8">            
                    @foreach ($reviews as $item)
                    <x-review-card :image-url="$item->photoUrl" :occupation="$item->occupation">
                        <x-slot:client>{{$item->client}}</x-slot>
                        <x-slot:comment>{{$item->comment}}</x-slot>
                    </x-review-card>
                    @endforeach                    
                </div>
            </div>
        </div>
    </section>
</x-app-layout>