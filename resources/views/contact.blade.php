<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-1xl">
        Ini adalah halaman Contact Page
    </h3>

    <h1>Halaman Contact</h1>
    <h3>Contact me</h3>
    <ul style="list-style-type: none;">
        <li>
            Email: <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank">{{ $email }}</a>
        </li>
        <li>
            Phone: <a href="https://wa.me/6282141423737" target="_blank">{{ $phone }}</a>
        </li>
        <li>
            Github: <a href="https://github.com/mubaihaqi" target="_blank">{{ $github }}</a>
        </li>
        <li>
            Threads : <a href="https://www.threads.net/@haq_xgi" target="_blank">{{ $treads }}</a>
        </li>
        <li>
            Instagram : <a href="https://www.instagram.com/haq_xgi" target="_blank">{{ $instagram }}</a>
        </li>
    </ul>
</x-layout>
