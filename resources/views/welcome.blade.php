@extends('components.layout')


@section('content')

    <div class="space-y-10">

        <section class="text-center pt-5">

            <h1 class="font-bold text-9xl">Let's Find Your Next Job</h1>
            <form action="" method="post" class="mt-6">
                <input type="text" placeholder="Web Developer..."
                        class="rounded-xl bg-white/15 border-white/10 px-5 py-4 w-full max-w-lg">

            </form>
        </section>


        <section class="pt-10">

            @include('components.section-heading')

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @include('components.job-card')
                @include('components.job-card')
                @include('components.job-card')
            </div>
        </section>

        <section>
            <x-section-heading> Tags </x-section-heading>

            <div class="mt-6 space-x-2">
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
                <x-tag> Tag </x-tag>
            </div>

        </section>

        <section>
            <x-section-heading> Recent Jobs </x-section-heading>

            <div class="mt-6 space-y-7">
                @include('components.job-card-wide')
                @include('components.job-card-wide')
                @include('components.job-card-wide')
            </div>
        </section>

    </div>

@endsection
