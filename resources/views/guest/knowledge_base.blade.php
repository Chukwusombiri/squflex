<x-app-layout>
    <!-- Hero Section -->
    <section class="md:min-h-[70vh] py-16 bg-gray-800 text-primary-light">
        <div class="flex flex-col items-center justify-center px-4 md:px-10">
            <h1
                class="sedan-regular text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 text-center max-w-4xl">
                {{ $appName }} Knowledge Base</h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl xl:text-3xl mt-2 md:mt-6 text-center max-w-3xl">A
                Comprehensive Optimal Investing Guide</p>
            <x-link-two href="#start" class="mt-4 md:mt-10">Learn more</x-link-two>
        </div>
    </section>
    {{-- intro --}}
    <section class="text-primary-light py-10 md:py-24" id="start">
        <div class="px-6 md:px-10 flex">
            <div class="w-full grid grid-cols-1 md:grid-cols-3 justify-center gap-4 lg:gap-8">
                <div class="col-span-3 md:col-span-1">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl futura-medium w-full max-w-[70%]">
                        Step-by-Step <span class="text-teal-600">Guide</span>
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <div class="w-full md:max-w-[90%] flex flex-col">
                        <p class="text-base md:text-lg lg:text-base xl:text-lg mb-4">New to
                            {{ $appName }}? This article comprehensively covers every key aspect of our
                            platform and services. Discover how to kickstart your first investment, initiate income
                            withdrawals, and much more. Enjoy the journey!</p>
                        <ul class="mb-4 md:mb-6">
                            <li class="mb-3 md:mb-2">
                                <a href="#register" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>How to create an account</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#investment" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Learn to make your first deposit</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#withdrawal" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Start withdrawing your returns through these easy steps</span>
                                </a>
                            </li>
                            <li>
                                <a href="#referrals" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>How to grow your community</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#forgot-password" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Learn how to reset your password</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#change-pasword" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>How to change your account's password</span>
                                </a>
                            </li>
                            <li class="mb-3 md:mb-2">
                                <a href="#session" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Are you logged in on more than device? Learn to control your sessions</span>
                                </a>
                            </li>
                            <li>
                                <a href="#delete-account" class="futura-medium text-lg underline flex items-center">
                                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-5 h-5 md:w-6 md:h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4.5 12.75l6 6 9-13.5" />
                                        </svg></span>
                                    <span>Learn how to delete your account</span>
                                </a>
                            </li>
                        </ul>
                        <p class="text-lg text-primary-light mb-2">
                            For further assistance and inquiries, feel free to contact us through email. Send us a
                            message now!
                        </p>
                        <div class="flex mt-2">
                            <x-link-two href="mailto:{{ config('mail.mainTo.address') }}"
                                class="font-semibold">Contact us</x-link-two>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- how tos --}}
    <section class="py-10 md:py-24 h-full">
        <div class="container mx-auto px-4 md:px-10">
            {{-- registration --}}
            <div
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl md:text-left mb-2 md:mb-0">
                        How to create an investment account
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 1</h4>
                                <p class="text-lg">Click on "Get started" button on our homepage or click "login"
                                    button from the
                                    menu items.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 2</h4>
                                <p class="text-lg">Click on the "New here? Create an account" link and you'll be
                                    redirected to our
                                    "Sign up" page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 3</h4>
                                <p class="text-lg">Fill out the registration form and submit.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 4</h4>
                                <p class="text-lg">After successful registration, You'll see a dialogue box on the page
                                    prompting you
                                    to go ahead and verify your email.</p>
                            </li>
                            <li class="mb-4 md mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 5</h4>
                                <p class="text-lg">Open your mailbox on the your device and find the "Verify Email" mail verify your email.</p>
                            </li>
                            <li class="mb-4 md mb-6">
                                <h4 class="futura-medium text-lg mb-2 font-semibold">Step 6</h4>
                                <p class="text-lg">You'll be automatically redirected to your dashboard from your
                                    inbox. You are all
                                    set!</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- depositing --}}
            <div id="investment"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Start depositing funds through these easy steps
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Login into your {{ $appName }}'s account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">On your dashboard, choose your preferred plan.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Fill out the deposit form and choose your funding source.</p>
                                <ul class="ml-4 list-disc" role="list">
                                    <li>Enter an amount within the selected Investment Plan's range.</li>
                                    <li>Select your preferred funding cryptocurrency.</li>
                                    <li>Submit your form.</li>
                                </ul>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">You'll find some instructions on how to complete your deposit on the
                                    page you are redirected to after form submission.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p class="text-lg">Copy the "Deposit wallet" address, send in cryptocurrency equivalent
                                    of your "Deposit amount" and screenshot the successful transaction.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 6</h4>
                                <p class="text-lg">For faster approval of your investment request, upload the
                                    screenshot on your account. Via "Deposits" from your menu, you'll find the
                                    exact deposit record, click upload receipt (on mobile phones, scroll horizontally
                                    to find the "upload receipt" button) and upload the screenshot transaction.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- withdrawal --}}
            <div id="withdrawal"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        How to start withdrawing your returns
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Login into your account, click on the "withdrawals" button on your
                                    dashboard. You'll be redirected to withdrawal page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Enter amount you wish to withdraw. Amount should not exceed your
                                    <strong>ROI</strong>.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">If you've added your cryptocurrency wallets to your account, then
                                    just "select wallet". If you are yet to add your wallets, click on "Add wallet".</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">Fill the form. Enter cryptocurrency name, wallet address and save.
                                    Go ahead to "select wallet" and submit withdrawal form.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 5</h4>
                                <p class="text-lg">You are all set! Our team will review your withdrawal request,
                                    approve it and release funds promptly.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- referrals --}}
            <div id="referrals"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-4 md:mb-6">
                        How to grow your community and get rewarded
                    </h2>
                    <p class="text-lg md:text-xl mb-2 md:mb-0">
                        When you invite a friend to {{ $appName }}, you will earn 10% of your friend’s initial
                        deposit.
                    </p>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <p class="text-lg md:text-xl mb-px md:mb-2 font-semibold">How do I Refer a Friend?</p>
                        <p class="text-lg mb-4">To invite your friends, follow the steps below:</p>
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Visit our website and login into your account.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">From the menu, choose "referrals" and you'll  be redirected to the referrals page.
                                </p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Scroll to the button, you'll see your referral link, click on the clipboard icon to copy it. Share it with your family, friends and colleagues.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">As soon as your invites sign-up and deposit funds you'll receive 10% of any amount they deposited. Your designated referral reward will be credited into your portfolio and you'll receive a confirmation email.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- forgot-password --}}
            <div id="forgot-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Learn how to reset your password (Forgot password)
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Navigate to the "login" page. Click the "forgot password..." link.
                                    You'll be redirected to the password reset page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Enter your email address and submit it. Check your inbox afterwards.
                                    If you receive a password reset email, return to the password reset page and request
                                    the password reset link again.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Open the email, click on the "reset password" button, you'll be
                                    redirected back to our website.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">Don't change your email address! Enter your new password, confirm
                                    password, and submit the form. You'll be redirected to the login page, sign in using
                                    your newly created password.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            {{-- change-password --}}
            <div id="change-password"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24  border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        How to change your password
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Login into your account and click on "Profile" via menu.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">In your profile page, you'll find "Change Password". Enter your old
                                    password, enter new one and confirm password. Submit the form after filling out all
                                    three fields by clicking "save".</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">After completing "Step 2", you'll be logged out automatically. Login
                                    into your account using your newly created password.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- session --}}
            <div id="session"
                class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center mb-10 md:mb-24 pb-10 md:pb-24 border-b border-primary-light">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Are you logged in on more than one device? Learn how to logout from other devices.
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account, navigate to the dashboard, and click on
                                    "Profile" from the menu items. This action will redirect you to the Profile
                                    Information page.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Scroll upward until you locate the section labeled "Browser
                                    Sessions."</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Click on the "LOG OUT OTHER BROWSER SESSIONS" button.</p>
                            </li>
                            <li class="mb-4 md:mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">A confirmation dialog will prompt on your screen, requesting your
                                    password for verification. Enter your password and submit. Voila! You have
                                    successfully logged out from all other devices.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            {{-- delete-account --}}
            <div id="delete-account" class="w-full grid grid-cols-1 md:grid-cols-3 md:gap-6 justify-center md:pb-16">
                <div class="col-span-3 md:col-span-1 flex flex-col">
                    <h2 class="sedan-regular text-xl md:text-3xl lg:text-4xl text-left mb-2 md:mb-0">
                        Learn how to delete your account
                    </h2>
                </div>
                <div class="col-span-3 md:col-span-2 flex justify-center md:justify-start">
                    <div class="w-full md:w-[70%]">
                        <ul class="list-style-none">
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 1</h4>
                                <p class="text-lg">Log in to your account, navigate to the dashboard, and click on
                                    "Profile". This action will redirect you to the Profile Information page.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 2</h4>
                                <p class="text-lg">Scroll upward until you locate the section labeled "Delete Account".
                                </p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 3</h4>
                                <p class="text-lg">Click on the "Delete Account" button.</p>
                            </li>
                            <li class="mb-6">
                                <h4 class="futura-medium text-lg font-semibold mb-2">Step 4</h4>
                                <p class="text-lg">A confirmation dialog will appear on your screen, asking for your
                                    password for verification. Enter your password and submit. Your account will be
                                    permanently deleted.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- FAQs --}}
    <section class="bg-primary-white py-16 md:py-24" id="faqs">
        <div class="container mx-auto px-4 md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div class="flex justify-start">
                    <h2 class="text-3xl md:text-6xl font-semibold sedan-regular">FAQS</h2>
                </div>
                <div class="flex flex-col">
                    <x-faq-list />
                </div>
            </div>
        </div>
    </section>
    {{-- cta --}}
    <section class="bg-primary py-12 px-6 lg:px-10">
        <div class="bg-teal-100 rounded-xl lg:flex lg:items-center lg:justify-between w-full mx-auto p-8 lg:p-12">
            <div class="flex flex-col gap-2 lg:gap-4 items-center lg:items-start mb-4 lg:mb-0">
                <h2 class="text-4xl lg:text-5xl font-bold sedan-regular-bold sm:text-4xl text-gray-900">
                    Are you ready to start?
                </h2>
                <p class="text-lg text-gray-700">
                    Secure your financial future and start taking the right steps with us
                </p>
            </div>
            <div class="lg:flex-shrink-0 flex items-center justify-center">                
                <x-link-one href="{{ route('user.deposit.pricingTable') }}">
                    Get started
                </x-link-one>               
            </div>
        </div>
    </section>
</x-app-layout>
