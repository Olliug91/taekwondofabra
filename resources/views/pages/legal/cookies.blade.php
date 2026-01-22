@extends('layouts.app')

@section('title', 'Política de Cookies - Taekwondo Fabra')

@section('content')
    <div class="container mx-auto px-4 py-16 max-w-4xl">
        <h1 class="text-3xl md:text-4xl font-heading mb-8 text-cyan-brand">Política de Cookies</h1>

        <div
            class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 space-y-6 text-gray-700 leading-relaxed text-justify">
            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">1. ¿Qué son las cookies?</h2>
                <p>
                    Una cookie es un fichero que se descarga en su ordenador al acceder a determinadas páginas web. Las
                    cookies permiten a una página web, entre otras cosas, almacenar y recuperar información sobre los
                    hábitos de navegación de un usuario o de su equipo y, dependiendo de la información que contengan y de
                    la forma en que utilice su equipo, pueden utilizarse para reconocer al usuario.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">2. ¿Qué tipos de cookies utiliza esta web?</h2>
                <ul class="list-disc list-inside space-y-2">
                    <li>
                        <strong>Cookies técnicas:</strong> Son aquellas que permiten al usuario la navegación a través de
                        una página web, plataforma o aplicación y la utilización de las diferentes opciones o servicios que
                        en ella existan.
                    </li>
                    <li>
                        <strong>Cookies de análisis:</strong> Son aquellas que bien tratadas por nosotros o por terceros,
                        nos permiten cuantificar el número de usuarios y así realizar la medición y análisis estadístico de
                        la utilización que hacen los usuarios del servicio ofertado.
                    </li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">3. Aceptación de la Política de cookies</h2>
                <p>
                    Asumimos que usted acepta el uso de cookies. No obstante, mostramos información sobre nuestra Política
                    de cookies con cada inicio de sesión con el objeto de que usted sea consciente.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">4. Cómo bloquear o eliminar las cookies</h2>
                <p>
                    Puede usted permitir, bloquear o eliminar las cookies instaladas en su equipo mediante la configuración
                    de las opciones del navegador instalado en su ordenador:
                </p>
                <ul class="list-disc list-inside mt-2 space-y-1 text-cyan-700">
                    <li><a href="https://support.google.com/chrome/answer/95647?hl=es" target="_blank"
                            class="hover:underline">Chrome</a></li>
                    <li><a href="https://support.microsoft.com/es-es/help/17442/windows-internet-explorer-delete-manage-cookies"
                            target="_blank" class="hover:underline">Explorer</a></li>
                    <li><a href="https://support.mozilla.org/es/kb/habilitar-y-deshabilitar-cookies-sitios-web-rastrear"
                            target="_blank" class="hover:underline">Firefox</a></li>
                    <li><a href="https://support.apple.com/es-es/guide/safari/sfri11471/mac" target="_blank"
                            class="hover:underline">Safari</a></li>
                </ul>
            </section>
        </div>
    </div>
@endsection