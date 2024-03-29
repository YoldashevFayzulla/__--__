@section('content')
    @extends('layouts.admin')

    <div class="p-4 m-4 sm:p-8 bg-white shadow sm:rounded-lg ">


        <div class="max-w-xl">
            <h1 class="text-center">Create Post</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{route('group.store')}}" method="post">
                @csrf
                <x-input-label for="password text-dark" :value="__('name')" class="text-dark"/>
                <x-text-input id="current_password" name="name" type="text"
                              class="mt-1 block w-full bg-light text-dark text-dark"/>

                <x-input-label for="password text-dark" :value="__('start time')" class="text-dark"/>
                <x-text-input id="current_password" name="start_day" type="text"
                              class="mt-1 block w-full bg-light text-dark text-dark"/>

                <x-input-label for="password text-dark" :value="__('end time')" class="text-dark"/>
                <x-text-input id="current_password" name="end_day" type="text"
                              class="mt-1 block w-full bg-light text-dark text-dark"/>

                <x-input-label :value="__('days')" class="text-dark"/>
                <select id="current_password" name="days" class="mt-1 block w-full bg-light text-dark text-dark">
                    <option value="odd_day">odd days</option>
                    <option value="even_day">even days</option>
                    <option value="even_day">every day</option>
                </select>

                <x-input-label for="password text-dark" :value="__('teacher')" class="text-dark"/>
                <select id="current_password" name="teacher" type="text"
                        class="mt-1 block w-full bg-light text-dark text-dark">
                    @foreach($teachers as $teacher)
                        <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                    @endforeach
                </select>

                <button class="btn btn-primary">{{ __('Save') }}</button>

                <button class="btn m-4 "></button>

            </form>
        </div>
    </div>

@endsection
