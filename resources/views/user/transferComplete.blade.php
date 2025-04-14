<x-user-layout>
    <x-user-nav page="Funds transfer" />
    <div class="futura-book w-full px-6 py-6 mx-auto">
        <!-- content -->
        <div class="flex flex-wrap -mx-3">
            <div class="max-w-full px-3 mb-6 lg:mb-0 lg:w-full lg:flex-none">
                <div class="w-full lg:w-7/12 mx-auto flex flex-col items-center min-w-0 mt-6 px-3 md:px-6 pt-4 pb-10 break-words bg-primary-lighter border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                    <x-success-svg />
                    <h2 class="futura-medium text-2xl mt-5 mb-4 md:mb-7 tracking-wider">Successful! Your job here is done</h2>
                    <p class="futura-book text-md mb-4 px-4">
                        ${{number_format($data['amount'])}} Funds transfer to {{$data['receiver']}} was initiated successfully, and currently undergoing review. The funds will remain in your portfolio and will be deducted after request approval.
                    </p>
                    <p class="futura-book text-md mb-4 md:mb-8 px-4">
                        To views the status of your request, navigate to the funds transfer history page - there you'll see all your outgoings and incomings records.    
                    </p>                                   
                    <div class="flex justify-center items-center flex-wrap">
                        <x-link-two href="{{route('user.transfers')}}" class="tracking-wide py-3 mb-4 md:mb-0 md:mr-3">View history</x-link-two>                        
                        <x-link-one href="{{route('user.dashboard')}}" class="font-semibold tracking-wide py-3">Dashboard</x-link-one>                                                                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-user-footer />
</x-user-layout>