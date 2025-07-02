@extends('layouts.app')

<div id="hero-section"
    class="relative overflow-hidden bg-gradient-to-t text-white from-black to-primary min-h-screen flex sm:flex-nowrap justify-between items-center gap-2 sm:pt-10">
    <div class="cube -z-0 rotate-45 top-0 -left-44"></div>
    <div class="cube -z-0 rotate-[60deg] bottom-0 opacity- -right-44"></div>
    <div class="sm:pl-10 text-center sm:text-start relative ">
        <h2 class=" text-5xl pb-5">One Click For Everyone</h2>
        <p class="text-base text-stone-300 pb-5 px-7 sm:px-0">DIGABLAST is a powerful tool that lets you send
            personalized
            WhatsApp
            messages to multiple contacts with a single click — no copy-pasting, no repetitive work.</p>
        <a href="" class="button button-white ">Learn More <span><i class="fa-solid fa-angle-right"></i></span></a>
    </div>
    <img class="hidden relative z-10 sm:block sm:pt-8 h-auto sm:w-1/2" src="/images/hero.png" alt="">
</div>

<div id="section-about" class="bg-black sm:min-h-screen text-white pb-5 sm:pb-0 sm:pt-20">
    <h2 class="text-center text-5xl pb-10" data-aos="fade-up">About</h2>
    <div class="flex flex-wrap items.start sm:items-center gap-10 justify-center">
        <img class="hidden sm:block sm:max-w-1/2 h-auto" src="/images/hero.png" alt="" data-aos="fade-up">
        <div class="flex-col flex gap-5 px-5">
            <div class="flex items-center gap-2" data-aos="fade-up">
                <div class="w-[50px] flex justify-center items-center">
                    <i class="fa-solid fa-arrow-pointer text-4xl "></i>
                </div>
                <div class="">
                    <h3 class="text-xl">One Click Broadcast</h3>
                    <p class="text-stone-300">Send your message to many contacts instantly.</p>
                </div>
            </div>
            <div class="flex items-center gap-2" data-aos="fade-up">
                <div class=" w-[50px] flex justify-center items-center"><i
                        class="fa-solid fa-clipboard-check text-4xl"></i></div>
                <div class="">
                    <h3 class="text-xl">Easy to Use</h3>
                    <p class="text-stone-300">No technical skills required. Just upload your contacts and message.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-2" data-aos="fade-up">
                <div class="w-[50px]  flex justify-center items-center"> <i class="fa-solid fa-bolt text-4xl"></i>
                </div>

                <div class="">
                    <h3 class="text-xl">Boost Engagement</h3>
                    <p class="text-stone-300">Perfect for promotions, updates, and customer support.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="section-pricing"
    class="relative overflow-hidden bg-gradient-to-t from-primary to-black  min-h-screen text-white  py-5  sm:py-20">
    <h2 class="text-center text-5xl pb-10" data-aos="fade-up">Pricing</h2>
    <div class="flex items-center justify-center flex-col sm:flex-row gap-6 px-3">
        <div data-aos="fade-up"
            class="min-h-80 w-60 px-1 border-white border rounded-xl flex flex-col items-center p-2 justify-between">
            <div class="flex flex-col items-center gap-2">
                <h3 class="text-2xl">Basic</h3>
                <p class="text-xs text-stone-400 text-center">Perfect for individuals or small businesses just
                    getting started</p>
                <h3 class="text-2xl">70K / <span class="text-base">month</span></h3>
                <ul class="list-disc text-stone-300 space-y-2">
                    <li class="text-xs">Send up to 500 messages/month</li>
                    <li class="text-xs">Manual contact upload</li>
                    <li class="text-xs">1 WhatsApp number</li>
                    <li class="text-xs">Basic support</li>
                    <li class="text-xs"> No automation</li>
                </ul>
            </div>
            <a href="" class="button button-white ">Select Plan
                <span>
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>
        <div data-aos="fade-up"
            class="min-h-96 w-60 px-1 shadow-[0_0_10px_#fff] border-white border rounded-xl flex flex-col items-center p-2 justify-between">
            <div class="flex flex-col items-center gap-2">
                <h3 class="text-2xl text-center">Pro<br>Best Offer</h3>
                <p class="text-xs text-stone-400 text-center">Great for growing businesses needing more scale</p>
                <h3 class="text-2xl">120K / <span class="text-base">month</span></h3>
                <ul class="list-disc text-stone-300 space-y-2">
                    <li class="text-xs">Send up to 5,000 messages/month</li>
                    <li class="text-xs">Contact grouping & tags</li>
                    <li class="text-xs">Message scheduling</li>
                    <li class="text-xs">2 WhatsApp numbers</li>
                    <li class="text-xs">Priority support</li>
                </ul>
            </div>
            <a href="" class="button button-solid-white ">Select Plan
                <span>
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>

        <div data-aos="fade-up"
            class="min-h-80 w-60 px-1 border-white border rounded-xl flex flex-col items-center p-2 justify-between">
            <div class="flex flex-col items-center gap-2">
                <h3 class="text-2xl">Business</h3>
                <p class="text-xs text-stone-400 text-center">For teams and enterprises with high-volume needs</p>
                <h3 class="text-2xl">230K / <span class="text-base">month</span></h3>
                <ul class="list-disc text-stone-300 space-y-2">
                    <li class="text-xs">Unlimited messages</li>
                    <li class="text-xs">Multiple user seats</li>
                    <li class="text-xs">Custom sender ID</li>
                    <li class="text-xs">Dedicated support & onboarding</li>
                </ul>
            </div>
            <a href="" class="button button-white ">Select Plan
                <span>
                    <i class="fa-solid fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="cube -z-0 rotate-45 bottom-0 -left-44"></div>
    <div class="cube -z-0 rotate-[60deg] top-0 opacity- -right-44"></div>
</div>

<div id="cta" class="min-h-52 bg-white flex justify-center items-center flex-col text-center">
    <h1 class="text-4xl font-medium">Simplify Your WhatsApp Communication Today.</h1>
    <h2 class="text-base text-stone-400">Reach more people, faster — with just one click.</h2>
</div>

<div id="footer" class="min-h-32 bg-black text-white py-10 px-5">
    <div class="flex justify-between">
        <h1 class="text-2xl font-medium">DigiBlast</h1>
        <div class="flex gap-10 text-stone-700">
            <div class="">
                <h4 class="text-white text-lg">About</h4>
                <a href="" class="block">Faq</a>
                <a href="" class="block">Benefit</a>
                <a href="" class="block">Pricing</a>
            </div>
            <div class="">
                <h4 class="text-white text-lg">Support</h4>
                <a href="" class="block">Email</a>
                <a href="" class="block">Whatsapp</a>
                <a href="" class="block">Github</a>
            </div>
        </div>
    </div>
</div>