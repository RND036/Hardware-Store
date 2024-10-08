<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Manage Profiles') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg p-6">
                <!-- Section Title -->
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-3xl font-semibold text-gray-800">User Profiles</h1>
                </div>

                <!-- Profiles List -->
                <ul class="space-y-4">
                    @foreach($manages as $manage)
                        <li class="bg-gray-50 p-4 rounded-lg shadow flex justify-between items-center">
                            <div>
                                <p class="text-lg font-medium text-gray-800">{{ $manage->username }}</p>
                                <p class="text-sm text-gray-500">{{ $manage->email ?? 'No Email' }}</p>
                            </div>
                            <div class="flex space-x-4">

                                <form action="{{ route('manage.destroy', $manage->id) }}" method="POST"
                                    onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class=" text-white px-6 py-3 rounded-lg shadow-lg"
                                        style="background-color: rgb(235, 24, 9)">Delete</button>

                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>

                <!-- Create Profile Form -->
                <div class="mt-10">
                    <h2 class="text-2xl font-semibold text-gray-800">Create Profile</h2>
                    <form action="{{ route('manage.store') }}" method="POST"
                        class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-2">
                        @csrf
                        <div class="col-span-2">
                            <label class="block text-gray-700 font-medium">Username</label>
                            <input type="text" name="username" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-gray-700 font-medium">About</label>
                            <textarea name="about"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Photo </label>
                            <input type="file" name="photo"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">First Name</label>
                            <input type="text" name="firstname"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Last Name</label>
                            <input type="text" name="lastname"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Email</label>
                            <input type="email" name="email"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Country</label>
                            <select name="country" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                <option>Sri Lanka</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    <option>India</option>
                                    <option>United State</option>
                                    <option>Japan</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Street</label>
                            <input type="text" name="street"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div class="col-span-2">
                            <label class="block text-gray-700 font-medium">Address</label>
                            <textarea name="description"
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm"></textarea>
                        </div>
                        <div>
                            <label class="block text-gray-700 font-medium">Zip Code</label>
                            <input type="number" name="zip" required
                                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                        </div>
                        <div class="col-span-2">
                            <button type="submit" class=" text-white px-6 py-3 rounded-lg shadow-lg"
                                style="background-color: rgb(9, 176, 9)">Create Profile</button>
                        </div>
                    </form>
                </div>

                <!-- Edit Profile Form (visible when editing) -->
                @if(isset($manage))
                        <div class="mt-10">
                            <h2 class="text-2xl font-semibold text-gray-800">Edit Profile</h2>
                            <form action="{{ route('manage.update', $manage->id) }}" method="POST"
                                class="mt-6 grid grid-cols-1 gap-6 md:grid-cols-2">
                                @csrf
                                @method('PUT')
                                <div class="col-span-2">
                                    <label class="block text-gray-700 font-medium">Username</label>
                                    <input type="text" name="username" value="{{ $manage->username }}" required
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-gray-700 font-medium">About</label>
                                    <textarea name="about"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">{{ $manage->about }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Photo</label>
                                    <input type="file" name="photo" value="{{ $manage->photo }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">First Name</label>
                                    <input type="text" name="firstname" value="{{ $manage->firstname }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Last Name</label>
                                    <input type="text" name="lastname" value="{{ $manage->lastname }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Email</label>
                                    <input type="email" name="email" value="{{ $manage->email }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Country</label>
                                    <select name="country" value="{{ $manage->country }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                        <option>Sri Lanka</option>
                                    <option>Canada</option>
                                    <option>Mexico</option>
                                    <option>India</option>
                                    <option>United State</option>
                                    <option>Japan</option>
                            </select>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Street</label>
                                    <input type="text" name="street" value="{{ $manage->street }}"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div class="col-span-2">
                                    <label class="block text-gray-700 font-medium">Address</label>
                                    <textarea name="description"
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">{{ $manage->description }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-gray-700 font-medium">Zip Code</label>
                                    <input type="number" name="zip" value="{{ $manage->zip }}" required
                                        class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm">
                                </div>
                                <div class="col-span-2">
                                    <button type="submit" class=" text-white px-6 py-3 rounded-lg shadow-lg"
                                        style="background-color: rgb(8, 8, 204)">Update Profile</button>
                                </div>
                        </div>
                        </form>
                    </div>
                @endif
        </div>
    </div>
    </div>
</x-app-layout>