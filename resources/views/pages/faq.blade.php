@extends('layouts.app')

@section('title', 'Preguntas Frecuentes - Taekwondo Fabra')

@section('content')
    <div class="container mx-auto px-4 py-16">
        <h1 class="text-center text-4xl font-heading mb-12 text-gray-900">Preguntas Frecuentes</h1>

        <!-- Índice -->
        <div class="max-w-4xl mx-auto mb-12 bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
            <h2 class="font-heading text-xl mb-4 text-gray-800">En este apartado resolvemos tus dudas más frecuentes:</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-2">
                <a href="#que-es-taekwondo"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    ¿Qué es el Taekwondo?
                </a>
                <a href="#principios"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Principios del Taekwondo
                </a>
                <a href="#experiencia-profesores"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Experiencia de los profesores
                </a>
                <a href="#beneficios"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Beneficios para mi hij@
                </a>
                <a href="#uniforme"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Uniforme (Dobok)
                </a>
                <a href="#cinturones"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Cinturones de colores
                </a>
                <a href="#examen"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Examen de cinturón
                </a>
                <a href="#poomsae"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    ¿Qué es un Poomsae?
                </a>
                <a href="#no-se-examina"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    ¿Por qué no se examina?
                </a>
                <a href="#competicion"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    ¿Se puede competir?
                </a>
                <a href="#equipo-competicion"
                    class="text-gray-600 hover:text-cyan-brand transition-colors text-sm py-1 flex items-center">
                    <span class="w-1.5 h-1.5 bg-gray-300 rounded-full mr-2"></span>
                    Equipo de competición
                </a>
            </div>
        </div>

        <div class="space-y-6 max-w-4xl mx-auto">
            <!-- 1. ¿Qué es el Taekwondo? -->
            <div id="que-es-taekwondo"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Qué es el Taekwondo?</h3>
                <p class="text-gray-700 leading-relaxed text-justify">
                    El Taekwondo es un arte marcial de origen Coreano, que tiene su origen en 1955 tras independizarse Corea
                    del dominio japonés. Su significado literal es el camino «DO» del pie «TAE» y del puño «KWON», y tras su
                    inclusión en el programa olímpico en Sidney 2000, se caracteriza en el dominio de las patadas,
                    convirtiéndolo así en un deporte de contacto de distancias largas.
                </p>
            </div>

            <!-- 2. Principios -->
            <div id="principios"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Cuáles son los principios del Taekwondo?</h3>
                <ul
                    class="list-disc list-inside text-gray-700 leading-relaxed space-y-2 marker:text-cyan-brand text-justify">
                    <li><strong>Cortesía:</strong> Tiene como objetivo hacer destacar al ser humano manteniendo una sociedad
                        armoniosa. Los practicantes de Taekwondo deben construir un carácter noble, así como entrenar de una
                        manera ordenada y disciplinada.</li>
                    <li><strong>Integridad:</strong> Es muy importante saber establecer los límites entre lo bueno y lo malo
                        así como saber reconocer cuando se ha hecho algo malo y redimirse por ello.</li>
                    <li><strong>Autocontrol:</strong> El autocontrol es de vital importancia tanto dentro como fuera del
                        dojang, tanto en el combate como en los asuntos personales. Asimismo, se ha de ser capaz de vivir y
                        trabajar dentro de las propias capacidades.</li>
                    <li><strong>Perseverancia:</strong> La felicidad o la prosperidad suelen ser alcanzadas por la persona
                        que es paciente. Para poder alcanzar un objetivo, ya sea promocionar a un grado superior o
                        perfeccionar una técnica, se ha de ser perseverante. Es fundamental el sobrepasar cada dificultad
                        con la perseverancia.</li>
                    <li><strong>Espíritu indomable:</strong> Un buen practicante de Taekwondo ha de ser siempre modesto y
                        honrado. Ante una injusticia, actuará con espíritu combativo, sin miedo y sin dudarlo, sin tener en
                        cuenta contra quién o contra cuántas personas se haya de enfrentar.</li>
                </ul>
            </div>

            <!-- 3. Experiencia profesores -->
            <div id="experiencia-profesores"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Qué experiencia tienen los profesores?</h3>
                <div class="text-gray-700 leading-relaxed space-y-4 text-justify">
                    <p>
                        El <strong>Club Taekwondo Fabra</strong> fue fundado en el año 2000 por los hermanos Fabra. En
                        <strong>2013</strong>, Lidia Carbonell y Guillermo Tudela asumieron la dirección, aportando una
                        nueva energía y visión al proyecto.
                    </p>

                    <div class="w-24 h-1 bg-cyan-brand mx-auto rounded-full my-6"></div>

                    <p>
                        Ambos iniciaron su camino marcial individualmente en 2007 en el club Chong Do Lee, alcanzando su
                        primer gran hito, el Cinturón Negro 1º Dan, en 2011.
                    </p>
                    <p>
                        Desde entonces, su formación ha sido imparable. Su compromiso con la excelencia técnica les ha
                        llevado a superar grado tras grado: 2º Dan en 2018, 3º Dan en 2020 y, recientemente, el <strong>4º
                            Dan en 2023</strong>. Esta constancia y superación personal es el mejor ejemplo que transmiten
                        cada día a sus alumnos.
                    </p>
                    <p>
                        Más allá de los grados, ambos son <strong>Árbitros Nacionales</strong> y poseen la titulación
                        oficial de <strong>Técnico Deportivo Nivel 2</strong> (Generalitat Valenciana & FTCV).
                    </p>

                    <p>
                        Gracias a esta dedicación, el club se enorgullece de haber formado a competidores que han
                        alcanzado <strong>podios nacionales</strong>, demostrando que la calidad técnica y los valores van
                        de la mano.
                    </p>

                    <p class="font-medium text-cyan-brand font-bold italic pt-2 text-center md:text-left">
                        "Con más de una década de experiencia docente, no solo enseñamos un arte marcial; formamos
                        personas a través de los valores del deporte."
                    </p>
                </div>
            </div>

            <!-- 4. Beneficios -->
            <div id="beneficios"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Qué beneficios tiene el Taekwondo para mi hij@?</h3>
                <ul
                    class="list-disc list-inside text-gray-700 leading-relaxed space-y-2 marker:text-cyan-brand text-justify">
                    <li><strong>Mejora de la forma física general:</strong> Su práctica desarrolla la fuerza, la resistencia
                        y la velocidad de las extremidades. Pero también, por la necesidad de ejercitarlo con potencia
                        aeróbica, nos ayuda a disminuir el porcentaje de grasa corporal.</li>
                    <li><strong>Aumenta la flexibilidad:</strong> La mayoría de las acciones en taekwondo son a base de
                        patadas, cuanto más altas mejor, y para conseguir hacerlas de forma eficaz se trabajan mucho los
                        estiramientos dinámicos y controlados.</li>
                    <li><strong>Previene dolores posturales:</strong> Con el trabajo corporal se consigue fuerza en todos
                        los músculos, lo que ayudará a que nuestra posición ósea sea la correcta, previniendo dolores de
                        espalda.</li>
                    <li><strong>Resistencia cardiovascular:</strong> En los momentos de máxima intensidad se propinan
                        patadas veloces y rápidos giros, alternando con otros de baja intensidad.</li>
                    <li><strong>Coordinación:</strong> Durante su práctica tenemos que combinar posiciones con golpes y
                        bloqueos, lo que mejora nuestro equilibrio y coordinación general.</li>
                    <li><strong>Resistencia al estrés:</strong> Imagina que has tenido un día duro y al final de la tarde
                        tienes la oportunidad de liberar toda la carga dando patadas (y sin hacerte ni hacer daño a nadie).
                    </li>
                    <li><strong>Autocontrol y confianza:</strong> Con la práctica mejoramos nuestro cuerpo y lo dominamos,
                        lo que genera autoestima y seguridad en nosotros mismos.</li>
                    <li><strong>Disciplina:</strong> Como en otras artes marciales, el taekwondo requiere concentración y
                        aporta disciplina.</li>
                    <li><strong>Relaciones sociales:</strong> Refuerza la comunicación entre compañeros de entrenamiento,
                        además de hacerte sentir parte del grupo. Con su práctica aprendemos a relacionarnos con cordialidad
                        y respeto.</li>
                </ul>
            </div>

            <!-- 5. Uniforme -->
            <div id="uniforme"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Cuál es el uniforme de Taekwondo?</h3>
                <p class="text-gray-700 leading-relaxed text-justify">
                    El practicante de Taekwondo debe entrenar con el uniforme oficial denominado «dobok». Es un uniforme que
                    consta de dos piezas, pantalón y chaqueta cerrada. Esta última se ajusta con el cinturón del
                    practicante, que será del correspondiente al grado que posea.
                </p>
            </div>

            <!-- 6. Cinturones -->
            <div id="cinturones"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Por qué se llevan cinturones de colores?</h3>
                <div class="text-gray-700 leading-relaxed space-y-3 text-justify">
                    <p>
                        En Taekwondo existe un sistema jerárquico que se simboliza mediante los cinturones. La jerarquía de
                        menor a mayor es:
                    </p>
                    <ul class="list-disc list-inside grid grid-cols-1 md:grid-cols-2 gap-2 marker:text-cyan-brand">
                        <li>Blanco</li>
                        <li>Blanco – Amarillo (Solo menores de 14)</li>
                        <li>Amarillo</li>
                        <li>Amarillo – Naranja (Solo menores de 14)</li>
                        <li>Naranja</li>
                        <li>Naranja – Verde (Solo menores de 14)</li>
                        <li>Verde</li>
                        <li>Verde – Azul (Solo menores de 14)</li>
                        <li>Azul</li>
                        <li>Azul – Rojo (Solo menores de 14)</li>
                        <li>Rojo</li>
                        <li>Negro 1º Dan hasta 9º Dan</li>
                    </ul>
                    <p>
                        Estos grados se obtienen realizando un examen donde el maestro evalúa y certifica los conocimientos.
                        El club Fabra Sport está afiliado a la <a href="https://ftcvtaekwondo.com" target="_blank"
                            class="text-cyan-600 hover:underline font-medium">Federación de Taekwondo de la Comunidad
                            Valenciana</a>
                        y a la <a href="https://fetaekwondo.net" target="_blank"
                            class="text-cyan-600 hover:underline font-medium">Real
                            Federación Española de Taekwondo</a>.
                    </p>
                </div>
            </div>

            <!-- 7. Examen -->
            <div id="examen"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿En qué consiste un examen de cinturón?</h3>
                <div class="text-gray-700 leading-relaxed space-y-3 text-justify">
                    <p>
                        Cada club establece sus normas y contenidos didácticos. En nuestro caso, tenemos elaborada una guía
                        con lo que se le pregunta exactamente al alumno.
                    </p>
                    <p>
                        Contemplamos la parte <strong>Física</strong>, la parte <strong>Técnica</strong> (dominio de
                        movimientos base) y la parte de <strong>Aplicación</strong> (combate y defensa personal).
                    </p>
                    <p class="font-semibold text-gray-800">Guías de examen:</p>
                    <ul class="list-disc list-inside marker:text-cyan-brand">
                        <li><a href="https://taekwondofabra.com/wp-content/uploads/2023/04/Guia_examen_Infantil.pdf"
                                target="_blank" class="text-cyan-600 hover:underline font-medium">Iniciación Taekwondo</a>
                        </li>
                        <li><a href="https://taekwondofabra.com/wp-content/uploads/2023/04/Guia_examen_Cadete.pdf"
                                target="_blank" class="text-cyan-600 hover:underline font-medium">Cadete Taekwondo</a></li>
                        <li><a href="https://taekwondofabra.com/wp-content/uploads/2023/04/Guia_examen_JuniorAdulto.pdf"
                                target="_blank" class="text-cyan-600 hover:underline font-medium">Junior/Senior
                                Taekwondo</a></li>
                    </ul>
                </div>
            </div>

            <!-- 8. Poomsae -->
            <div id="poomsae"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Qué es un poomsae?</h3>
                <p class="text-gray-700 leading-relaxed text-justify">
                    Un Poomsae es una coreografía de movimientos, ataques y defensas, que engloba la técnica aprendida y que
                    sirve como parte del examen para evaluar al alumno. Estas coreografías están reconocidas mundialmente
                    por la World Taekwondo. Además, son utilizados como base de competición en la modalidad «Poomsae».
                </p>
            </div>

            <!-- 9. Por qué no se examina -->
            <div id="no-se-examina"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Por qué mi hij@ no se examina de cinturón?</h3>
                <div class="text-gray-700 leading-relaxed space-y-3 text-justify">
                    <p>
                        Es el maestro quién propone al alumno para el paso al siguiente grado. Si el maestro no ve preparado
                        al alumno, no lo propondrá para el examen. Cada persona tiene un ritmo de aprendizaje diferente.
                    </p>
                    <p>
                        Nuestros objetivos son convertir al cinturón blanco en un cinturón negro completo y educar en
                        valores. Los criterios para proponer a examen incluyen:
                    </p>
                    <ul class="list-disc list-inside marker:text-cyan-brand">
                        <li>Tener la licencia en vigor.</li>
                        <li>Cumplir el tiempo mínimo de permanencia en el cinturón actual.</li>
                        <li>Actitud positiva y proactiva.</li>
                        <li>Esfuerzo y progresión física/técnica.</li>
                        <li>Buena conducta y respeto.</li>
                        <li>Asistencia regular.</li>
                    </ul>
                </div>
            </div>

            <!-- 10. Competición -->
            <div id="competicion"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Se puede competir en Taekwondo?</h3>
                <p class="text-gray-700 leading-relaxed text-justify">
                    Sí, por supuesto. Existen dos modalidades: <strong>Poomsae</strong> (técnica/coreografía) y
                    <strong>Combate</strong> (enfrentamiento cuerpo a cuerpo). El club Fabra Sport tiene un equipo de
                    competición que participa asiduamente en eventos de la federación y otras entidades.
                </p>
            </div>

            <!-- 11. Equipo competición -->
            <div id="equipo-competicion"
                class="scroll-mt-24 bg-white rounded-2xl p-8 shadow-sm border border-gray-100 transition-colors hover:border-cyan-100">
                <h3 class="font-heading text-xl mb-3 text-cyan-brand">¿Por qué mi hij@ no forma parte del equipo de
                    competición?</h3>
                <p class="text-gray-700 leading-relaxed text-justify">
                    Las competiciones tienen un alto nivel y exigencia. Para formar parte del equipo, exigimos una
                    implicación extra para entrenar y preparar los eventos. Seleccionamos cuidadosamente a qué competición
                    va cada miembro y si está realmente preparado (físicamente, técnicamente y mentalmente) para
                    disfrutarla y no frustrarse.
                </p>
            </div>
        </div>
        </section>
@endsection