<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Handicraft</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <header class="bg-blue-700 py-4 px-8 text-white flex justify-between items-center">
                <h1 class="font-bold text-3xl">HANDICRAFT PAY</h1>
                <span>Marc Trösken</span>
            </header>
            <div class="px-8 shadow">
                <ul class="flex">
                    <li class="mr-6">
                        <router-link
                            to="/"
                            class="flex items-center no-underline py-5 inline-block opacity-50 text-grey-dark opacity-50 hover:text-blue-700 hover:opacity-100 border-b border-transparent hover:border-blue-500"
                        >
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M18.672 11H17v6c0 .445-.194 1-1 1h-4v-6H8v6H4c-.806 0-1-.555-1-1v-6H1.328c-.598 0-.47-.324-.06-.748L9.292 2.22c.195-.202.451-.302.708-.312.257.01.513.109.708.312l8.023 8.031c.411.425.539.749-.059.749z"/></svg>
                            Dashboard
                        </router-link>
                    </li>
                    <li class="mr-6">
                        <router-link
                            to="/projects"
                            class="flex items-center no-underline py-5 inline-block opacity-50 md:text-grey-dark opacity-50 hover:text-blue-700 hover:opacity-100 border-b border-transparent hover:border-blue-500"
                        >
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9 10h2v2h9s-.149-4.459-.2-5.854C19.75 4.82 19.275 4 17.8 4h-3.208l-1.197-2.256C13.064 1.121 12.951 1 12.216 1H7.783c-.735 0-.847.121-1.179.744-.165.311-.7 1.318-1.196 2.256H2.199c-1.476 0-1.945.82-2 2.146C.145 7.473 0 12 0 12h9v-2zM7.649 2.916c.23-.432.308-.516.817-.516h3.067c.509 0 .588.084.816.516L12.924 4h-5.85l.575-1.084zM11 15H9v-2H.5s.124 1.797.199 3.322C.73 16.955.917 18 2.499 18H17.5c1.582 0 1.765-1.047 1.8-1.678.087-1.568.2-3.322.2-3.322H11v2z"/></svg>
                            Projekte
                        </router-link>
                    </li>
                    <li class="mr-6">
                        <router-link
                            to="/customers"
                            class="flex items-center no-underline py-5 inline-block opacity-50 md:text-grey-dark opacity-50 hover:text-blue-700 hover:opacity-100 border-b border-transparent hover:border-blue-500"
                        >
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M15.989 19.129c0-2.246-2.187-3.389-4.317-4.307-2.123-.914-2.801-1.684-2.801-3.334 0-.989.648-.667.932-2.481.12-.752.692-.012.802-1.729 0-.684-.313-.854-.313-.854s.159-1.013.221-1.793c.064-.817-.398-2.56-2.301-3.095-.332-.341-.557-.882.467-1.424-2.24-.104-2.761 1.068-3.954 1.93-1.015.756-1.289 1.953-1.24 2.59.065.78.223 1.793.223 1.793s-.314.17-.314.854c.11 1.718.684.977.803 1.729.284 1.814.933 1.492.933 2.481 0 1.65-.212 2.21-2.336 3.124C.663 15.53 0 17 .011 19.129.014 19.766 0 20 0 20h16s-.011-.234-.011-.871zm2.539-5.764c-1.135-.457-1.605-1.002-1.605-2.066 0-.641.418-.432.602-1.603.077-.484.447-.008.518-1.115 0-.441-.202-.551-.202-.551s.103-.656.143-1.159c.05-.627-.364-2.247-2.268-2.247-1.903 0-2.318 1.62-2.269 2.247.042.502.144 1.159.144 1.159s-.202.109-.202.551c.071 1.107.441.631.518 1.115.184 1.172.602.963.602 1.603 0 1.064-.438 1.562-1.809 2.152-.069.029-.12.068-.183.102 1.64.712 4.226 1.941 4.838 4.447H20v-2.318c0-1-.273-1.834-1.472-2.317z"/></svg>
                            Kunden
                        </router-link>
                    </li>
                    <li class="mr-6">
                        <a
                            href="#"
                            class="flex items-center no-underline py-5 inline-block opacity-50 md:text-grey-dark opacity-50 hover:text-blue-700 hover:opacity-100 border-b border-transparent hover:border-blue-500"
                        >
                            <svg class="h-6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 0 0-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 0 0-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 0 0-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 0 0 1.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 0 0 .691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 0 0 1.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 0 0 1.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 0 0 .692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 1 1 0-7.306 3.653 3.653 0 0 1 0 7.306z"/></svg>
                            Einstellungen
                        </a>
                    </li>
                </ul>
            </div>
            <div class="h-full bg-gray-200 px-8">
                <router-view></router-view>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
