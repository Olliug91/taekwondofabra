@extends('layouts.app')

@section('title', 'Aviso Legal - Taekwondo Fabra')

@section('content')
    <div class="container mx-auto px-4 py-16 max-w-4xl">
        <h1 class="text-3xl md:text-4xl font-heading mb-8 text-cyan-brand">Aviso Legal</h1>

        <div
            class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 space-y-6 text-gray-700 leading-relaxed text-justify">
            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">1. Datos Identificativos</h2>
                <p>
                    En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio,
                    de Servicios de la Sociedad de la Información y del Comercio Electrónico, a continuación se reflejan los
                    siguientes datos:
                </p>
                <p class="mt-2">
                    La empresa titular de dominio web es <strong>Club Taekwondo Fabra</strong> (en adelante Taekwondo
                    Fabra), con domicilio a estos efectos en Calle Rosales 27 número de C.I.F.: [CIF]. Correo electrónico de
                    contacto: guillo@taekwondofabra.com del sitio web.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">2. Usuarios</h2>
                <p>
                    El acceso y/o uso de este portal de Taekwondo Fabra atribuye la condición de USUARIO, que acepta, desde
                    dicho acceso y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de
                    aplicación independientemente de las Condiciones Generales de Contratación que en su caso resulten de
                    obligado cumplimiento.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">3. Uso del Portal</h2>
                <p>
                    <strong>taekwondofabra.com</strong> proporciona el acceso a multitud de informaciones, servicios,
                    programas o datos (en adelante, "los contenidos") en Internet pertenecientes a Taekwondo Fabra o a sus
                    licenciantes a los que el USUARIO pueda tener acceso. El USUARIO asume la responsabilidad del uso del
                    portal. Dicha responsabilidad se extiende al registro que fuese necesario para acceder a determinados
                    servicios o contenidos.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">4. Protección de Datos</h2>
                <p>
                    Taekwondo Fabra cumple con las directrices de la normativa vigente en materia de protección de datos
                    personales, el Reglamento (UE) 2016/679 de 27 de abril de 2016 (RGPD), relativo a la protección de las
                    personas físicas en cuanto al tratamiento de datos personales y a la libre circulación de estos datos.
                </p>
                <p class="mt-2">
                    Para más información, puede consultar nuestra <a href="{{ route('legal.privacidad') }}"
                        class="text-cyan-brand hover:underline">Política de Privacidad</a>.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">5. Propiedad Intelectual e Industrial</h2>
                <p>
                    Taekwondo Fabra por sí o como cesionaria, es titular de todos los derechos de propiedad intelectual e
                    industrial de su página web, así como de los elementos contenidos en la misma (a título enunciativo,
                    imágenes, sonido, audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores,
                    estructura y diseño, selección de materiales usados, programas de ordenador necesarios para su
                    funcionamiento, acceso y uso, etc.), titularidad de Taekwondo Fabra o bien de sus licenciantes.
                </p>
                <p class="mt-2">
                    Todos los derechos reservados. En virtud de lo dispuesto en los artículos 8 y 32.1, párrafo segundo, de
                    la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la
                    comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los
                    contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio
                    técnico, sin la autorización de Taekwondo Fabra.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">6. Exclusión de Garantías y Responsabilidad</h2>
                <p>
                    Taekwondo Fabra no se hace responsable, en ningún caso, de los daños y perjuicios de cualquier
                    naturaleza que pudieran ocasionar, a título enunciativo: errores u omisiones en los contenidos, falta de
                    disponibilidad del portal o la transmisión de virus o programas maliciosos o lesivos en los contenidos,
                    a pesar de haber adoptado todas las medidas tecnológicas necesarias para evitarlo.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">7. Modificaciones</h2>
                <p>
                    Taekwondo Fabra se reserva el derecho de efectuar sin previo aviso las modificaciones que considere
                    oportunas en su portal, pudiendo cambiar, suprimir o añadir tanto los contenidos y servicios que se
                    presten a través de la misma como la forma en la que éstos aparezcan presentados o localizados en su
                    portal.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-bold text-gray-900 mb-3">8. Legislación Aplicable y Jurisdicción</h2>
                <p>
                    La relación entre Taekwondo Fabra y el USUARIO se regirá por la normativa española vigente y cualquier
                    controversia se someterá a los Juzgados y tribunales de la ciudad de [CIUDAD].
                </p>
            </section>
        </div>
    </div>
@endsection