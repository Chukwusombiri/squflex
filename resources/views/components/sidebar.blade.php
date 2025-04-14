<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-x-hidden overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
  <div class="relative h-19 flex items-center bg-primary-dark">
    <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-gray-300 xl:hidden" sidenav-close></i>
    <a class="block px-8 m-0 text-sm whitespace-nowrap text-slate-100" href="{{route('guestHome')}}">
      <x-application-mark class="h-full w-full transition-all duration-200 ease-nav-brand"/>
    </a>
  </div>

  <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

  <div class="futura-book items-center block w-auto min-h-screen overflow-y-auto overflow-x-hidden{{-- h-sidenav --}} grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('guestHome')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Return Home</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.dashboard')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.dashboard')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-primary-dark ni ni-tv-2"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.payments') || strpos(request()->route()->getName(),'user.payment')!==false) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.payments')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Withdrawal Wallets</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.deposit.pricingTable') || strpos(request()->route()->getName(),'deposit.complete')!==false || strpos(request()->route()->getName(),'deposit.create')!==false) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.deposit.pricingTable')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 4.5 15 15m0 0V8.25m0 11.25H8.25" />
            </svg>                                
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Deposit</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.deposits') || strpos(request()->route()->getName(),'deposit.upload')!==false) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.deposits')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0ZM3.75 12h.007v.008H3.75V12Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm-.375 5.25h.007v.008H3.75v-.008Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg> 
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Deposit history</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.withdrawal.create')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.withdrawal.create')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Withdrawal</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.withdrawals')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.withdrawals')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 0 1 0 3.75H5.625a1.875 1.875 0 0 1 0-3.75Z" />
            </svg>            
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Withdrawal history</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.transfer.create')|| strpos(request()->route()->getName(),'transfer.complete')!==false) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.transfer.create')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
            </svg>                        
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Transfer funds</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.transfers')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.transfers')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8.242 5.992h12m-12 6.003H20.24m-12 5.999h12M4.117 7.495v-3.75H2.99m1.125 3.75H2.99m1.125 0H5.24m-1.92 2.577a1.125 1.125 0 1 1 1.591 1.59l-1.83 1.83h2.16M2.99 15.745h1.125a1.125 1.125 0 0 1 0 2.25H3.74m0-.002h.375a1.125 1.125 0 0 1 0 2.25H2.99" />
            </svg>                        
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Funds transfer history</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.transactions')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif  py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.transactions')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-primary-dark ni ni-single-copy-04"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Transactions</span>
        </a>
      </li>        
      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('user.referrals') || strpos(request()->route()->getName(),'user.referrals')!==false) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{route('user.referrals')}}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 relative top-0 text-sm leading-normal text-primary-dark">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>                     
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Referrals & rewards</span>
        </a>
      </li>
      <li class="w-full mt-4">
        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account</h6>
      </li>

      <li class="mt-0.5 w-full">
        <a class="@if(request()->routeIs('profile.show')) rounded-lg font-semibold text-slate-700 bg-blue-100 @endif py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('profile.show') }}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile Setting</span>
        </a>
      </li>
      
      <li class="mt-0.5 w-full">
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 text-sm leading-normal text-primary-dark ni ni-button-power"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Out</span>
          </button>
        </form>          
      </li>
     
      <li class="mt-0.5 w-full">
        <div class="flex flex-col py-2.7 text-sm ease-nav-brand my-0 mx-2 whitespace-nowrap px-4 transition-colors">
          <h2 class="text-xl mb-4">Questions?</h2>
          <p class="mb-2"><a href="mailto:{{config('mail.mainTo.address')}}">Email: <span class="underline">{{config('mail.mainTo.address')}}</span></a></p>
          <p class="mb-2">
            <a href="" class="hover:underline inline-flex items-center">
              <span class="mr-2">Chat: Use Livechat in real-time</span>              
            </a>
          </p>
        </div>         
      </li>        
    </ul>    
  </div>    
</aside>