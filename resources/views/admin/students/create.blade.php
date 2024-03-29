@section('content')
    @extends('layouts.admin')

    <div class="p-4 m-4 sm:p-8 bg-white shadow sm:rounded-lg ">


        <div class="max-w-xl">
            <h1 class="text-center">Create Student</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <x-input-label for="password text-dark" :value="__('name')" class="text-dark"/>
                <x-text-input id="current_password" name="name" type="text"
                              class="mt-1 block w-full bg-light text-dark text-dark"/>

                <x-input-label for="p" :value="__('Email')" class="text-dark"/>
                <x-text-input id="p" name="email" type="text" class="mt-1 block w-full bg-light text-dark"/>

                <x-input-label for="a" :value="__('Password')" class="text-dark"/>
                <x-text-input id="a" name="password" type="password" class="mt-1 block w-full bg-light text-dark"/>

                <x-input-label for="text" :value="__('Phone Number')" class="text-dark"/>
                <x-text-input id="text" name="tel" type="number" class="mt-1 block w-full bg-light text-dark"/>

                <x-input-label for="text" :value="__('Parents phone Number')" class="text-dark"/>
                <x-text-input id="text" name="parents_tel" type="number" class="mt-1 block w-full bg-light text-dark"/>

                <x-input-label for="dark" :value="__('group')" class="text-dark" />
                <select name="group_id" id="" class="mt-1 block w-full bg-light text-dark">
                    @foreach($groups as $group)
                        <option value="{{$group->id}}">{{$group->name."_".$group->days.'_'.$group->start_day.':'.$group->end_day}} </option>
                    @endforeach
                </select>

                <x-input-label for="text" :value="__('sum')" class="text-dark"/>
                <x-text-input id="text" name="sum" type="number" class="mt-1 block w-full bg-light text-dark"/>

                <x-input-label for="n" :value="__('Take a Photo.Not necessary !')" class="text-dark"/>
                <x-text-input id="n" name="image" type="file" class="mt-1 block bg-light text-dark"/>
                <button class="btn btn-primary">{{ __('Save') }}</button>

                <button class="btn m-4 "></button>

            </form>
        </div>
    </div>

@endsection