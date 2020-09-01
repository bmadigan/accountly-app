<x-layouts.auth>

    @section('page_title') Sign in to your account @endsection


    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-20 w-auto" src="/svgs/workmark.svg" alt="Workflow"/>
        <h2 class="mt-4 text-center text-3xl leading-9 font-extrabold text-gray-900">
            Sign in to your account
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form action="#" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                            Email address
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" type="email" name="email" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>
                        @error('email')
                        <span class="f-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                            Password
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" type="password" name="password" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                        </div>
                        @error('password')
                        <span class="f-error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>

                    <div class="mt-6 flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" type="checkbox" name="remember"
                                   {{ old('remember') ? 'checked' : '' }}
                                   class="form-checkbox h-4 w-4 text-blue-600 transition duration-150 ease-in-out"/>
                            <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                            Sign in
                        </button>
                    </span>
                    </div>
                </form>

                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm leading-5">
                        <span class="px-2 bg-white text-gray-500">
                            Or continue with
                        </span>
                        </div>
                    </div>

                    <div class="mt-6">
                        <div>
                            <div class="btn-wrapper text-center items-center">
                                <button
                                    class="bg-white active:bg-gray-100 text-gray-800 font-normal px-4 py-2 rounded outline-none focus:outline-none mr-2 mb-1 uppercase shadow hover:shadow-md inline-flex items-center font-bold text-lg"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    <img alt="Google Icon" class="w-8 mr-1" src="/svgs/google-wordmark.svg">
                                    Google
                                </button>
                                <div class="mt-2 text-sm text-gray-400">
                                    (But not yet)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-layouts.auth>
