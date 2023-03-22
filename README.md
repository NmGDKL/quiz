# Laravel 8 ile Quizzer Uygulaması

Codeigniter Hocası Youtube kanalında hazırlanan Laravel 8 ile Quiz Uygulaması kodları.



## Kurulum
1. Composer aracılığıyla projeyi bilgisayarınıza indirin:

    ```sh
    $  Projeyi bilgisayarınıza indirin
    ```
2. Bağımlı olduğu php paketlerini kurulumunu gerçekleştirin:

    ```sh
    $ composer install
    ```
3. Bağımlı olduğu js paketlerini yükleyin:

    ```sh
    $ npm install
    ```
4. Js dosyalarını render alın:

    ```sh
    $ npm run serve
    ```
5. .env.example dosyasını .env olarak düzeltip veritabanı bilgilerinizi girin

6. Migration ve seed komutu ile demo bilgileri yükleyin:

    ```sh
    $ php artisan migrate:fresh --seed
    ```
