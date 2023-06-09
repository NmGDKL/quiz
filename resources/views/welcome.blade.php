<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">


        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
              @if (Route::has('login'))
        <div class="float-right mt-4">
            @auth
            <a href="{{ route('dashboard') }}" class=" text-black h6 underline">
                Panel</a>
            @else
            <a href="{{ route('login') }}" class=" text-black h6 underline">Giriş Yap</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4  text-black h6 underline">Kayıt Ol</a>
            @endif
            @endauth
        </div>
        @endif
            <div class="flex justify-center  sm:justify-start">
                <h1>
                    <i class="fa fa-question"></i>
                    {{config('app.name')}}
                </h1>

            </div>


            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <i class="fa fa-book mr-2"></i>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a
                                    class="underline text-gray-900 dark:text-white">Bilginizi Test Edin!</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Her hafta eklenen yeni quizler ile bilginizi test edin.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <i class="fa fa-trophy mr-1"></i>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a
                                    class="underline text-gray-900 dark:text-white">Puanınızı kıyaslayın</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Quiz'e katılan diğer kullanıcılar arasında en yüksek puanı alabilmek için sorulara
                                doğru cevap verin. Quiz bittiğinde sıralamanız belli olacak.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <i class="fa fa-graduation-cap mr-1"></i>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a
                                    class="underline text-gray-900 dark:text-white">Cevaplarınızı Analiz Edin</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Kullanıcıların yüzde kaçı sorulara doğru cevap vermiş kolayca görüntüleyin.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <i class="fa fa-gift mr-1"></i>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Hediyeler
                                Kazanın
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Her hafta düzenlenen ödüllü Quizlere katılarak, hem bilginizi ölçebilir hemde sürpriz
                            hediyeler kazanabilirsiniz.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
