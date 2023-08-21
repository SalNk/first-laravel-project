<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')

</head>

<body>
    <div class="h-screen grid place-items-center">
        <div>

            <form action="/test" method="post" class="shadow-lg bg-gray-50 p-12">
                @method('post')
                @csrf

                @if ($errors)
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                @endif

                <p>
                    <label for="">User</label>
                    <input type="text" class="bg-gray-100 rounded-lg px-3 outline-none" placeholder="Votre nom" name="nom" value="{{old('nom')}}">
                </p>
                <p class="py-4">
                    <label for="">Email</label>
                    <input type="email" class="bg-gray-100 rounded-lg px-3 outline-none"
                        placeholder="Votre mail" name="email" value="{{old('email')}}">
                </p>
                <p class="grid place-items-center">
                    <button type="submit" name="btn_submit"
                        class="text-center place-items-center text-white bg-blue-500 hover:bg-blue-600 py-1 px-3 rounded-lg">
                        Envoyer
                    </button>
                </p>

            </form>


            {{-- <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Post
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $user)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">
                                        {{ $user['name'] }}
                                    </div>
                                    <div class="font-normal text-gray-500">
                                        {{ $user['email'] }}
                                    </div>
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                {{ $user['grade'] }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex items-center">
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-500 mr-2"></div> online
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="#"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                    user</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}
        </div>
    </div>

</body>

</html>
