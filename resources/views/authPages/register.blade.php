@extends('layouts.app')

<div id="hero-section"
    class="relative overflow-hidden bg-gradient-to-t text-white from-black to-primary min-h-screen flex sm:flex-nowrap justify-center items-center gap-2 sm:pt-10">
    <div class="cube -z-0 rotate-45 top-0 -left-44"></div>
    <div class="cube -z-0 rotate-[60deg] bottom-0 opacity- -right-44"></div>
    <div
        class="flex flex-col relative z-10 items-center mx-5 min-h-52 w-full sm:w-1/3 sm:mx-0  bg-white-transparent rounded-xl text-white">
        <h1 class="text-3xl font-medium">Sign Up</h1>
        <form action="" class="w-full p-3">
            <label for="name" class="block ">Fullname</label>
            <input placeholder="John Expander" name="name" type="text"
                class="border border-stone-400 w-full rounded-sm p-1 text-sm">
            <label for="email" class="block pt-2">Email</label>
            <input placeholder="example@gmail.com" name="email" type="email"
                class="border border-stone-400 w-full rounded-sm p-1 text-sm">

            <label for="password" class="block pt-2">Password</label>
            <input placeholder="*******" name="password" type="password"
                class="border border-stone-400 w-full rounded-sm p-1 text-sm">
            <label for="password" class="block pt-2">Confirm Password</label>
            <input placeholder="*******" name="password" type="password"
                class="border border-stone-400 w-full rounded-sm p-1 text-sm">
            <div class="flex justify-end w-full pb-3"></div>
            <button class="button button-success w-full">Sign Up</button>
            <p class="text-center text-sm pt-1">Already have an account? <a href="/login">sign in</a></p>
        </form>
    </div>
</div>