<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Examen - {{ $currentExam['belt'] }}</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #0098DA;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-bottom: 4px solid #004f74;
        }
        .header h1 {
            margin: 0 0 10px 0;
            font-size: 28px;
        }
        .header p {
            margin: 0;
            font-size: 16px;
            color: #cffafe;
        }
        .content {
            padding: 30px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #007bb5;
            border-bottom: 2px solid #a5f3fc;
            padding-bottom: 5px;
            margin-bottom: 10px;
            page-break-after: avoid;
        }
        .subsection {
            margin-bottom: 15px;
            page-break-inside: avoid;
        }
        .subsection h4 {
            margin: 0 0 5px 0;
            font-size: 14px;
            color: #374151;
            font-weight: bold;
            page-break-after: avoid;
        }
        .subsection p {
            margin: 0;
            font-size: 13px;
            line-height: 1.5;
            color: #4b5563;
        }
        .footer {
            position: fixed;
            bottom: -30px;
            left: 0;
            right: 0;
            height: 30px;
            text-align: center;
            font-size: 12px;
            color: #6b7280;
            border-top: 1px solid #e5e7eb;
            padding-top: 10px;
        }
        .grid {
            width: 100%;
            border-collapse: collapse;
        }
        .grid td {
            width: 50%;
            vertical-align: top;
            padding-right: 15px;
            padding-bottom: 15px;
        }
        .tech-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 10px 10px;
            margin-left: -10px;
            margin-top: -5px;
        }
        .tech-table td {
            width: 50%;
            background-color: #f9fafb;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            vertical-align: top;
        }
        .tech-korean {
            font-weight: bold;
            color: #111827;
            font-size: 13px;
            display: block;
        }
        .tech-spanish {
            color: #374151;
            font-size: 11px;
            display: block;
            margin-top: 2px;
        }
    </style>
    @php
    if (!function_exists('parseTechniques')) {
        function parseTechniques($text) {
            if (!$text || $text === '-' || $text === 'No procede') {
                return [];
            }
            $lines = explode("\n", $text);
            $items = [];
            foreach ($lines as $line) {
                $line = trim($line);
                if (!empty($line)) {
                    $line = preg_replace('/^[-·]\s*/u', '', $line);
                    $parts = explode(':', $line, 2);
                    $korean = trim($parts[0] ?? '');
                    $spanish = trim($parts[1] ?? '');
                    if (!empty($korean)) {
                        $items[] = ['korean' => $korean, 'spanish' => $spanish];
                    }
                }
            }
            return $items;
        }
    }
    @endphp
</head>
<body>

    <div class="header">
        <h1>Examen: {{ $currentExam['belt'] }}</h1>
        <p>
            Grupo: {{ 
                $ageGroup == 'iniciacion' ? 'Iniciación (3-7 años)' : 
                ($ageGroup == 'cadete' ? 'Cadete (8-13 años)' : 'Junior / Adultos (+14 años)') 
            }} | Taekwondo Fabra Valencia
        </p>
    </div>

    <div class="content">

        @if(isset($currentExam['physical']) && $currentExam['physical'] !== '-')
        <div class="section">
            <div class="section-title">1. Físico</div>
            <div class="subsection">
                <ul style="list-style-type: none; padding-left: 0; margin-top: 0;">
                @foreach(explode("\n", $currentExam['physical']) as $fis)
                    @php $fis = trim($fis); @endphp
                    @if($fis != '')
                    <li style="margin-bottom: 8px; font-size: 13px; color: #4b5563;">
                        <span style="display: inline-block; width: 6px; height: 6px; background-color: #0ea5e9; border-radius: 50%; margin-right: 8px; margin-bottom: 2px;"></span> 
                        {{ preg_replace('/^[-·]\s*/u', '', $fis) }}
                    </li>
                    @endif
                @endforeach
                </ul>
            </div>
        </div>
        @endif

        <div class="section">
            <div class="section-title">2. Técnica</div>
            
            @if(isset($currentExam['stances']) && $currentExam['stances'] !== '-')
            <div class="subsection">
                <h4>Posiciones</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['stances']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if(isset($currentExam['defenses']) && $currentExam['defenses'] !== '-')
            <div class="subsection">
                <h4>Defensas</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['defenses']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if(isset($currentExam['attacks']) && $currentExam['attacks'] !== '-')
            <div class="subsection">
                <h4>Ataques</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['attacks']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if(isset($currentExam['kicks']) && $currentExam['kicks'] !== '-')
            <div class="subsection">
                <h4>Patadas</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['kicks']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </div>

        @if(isset($currentExam['poomsae']) && $currentExam['poomsae'] !== '-' && $currentExam['poomsae'] !== 'No procede')
        <div class="section">
            <div class="section-title">3. Poomsae</div>
            <div class="subsection" style="text-align: center;">
                @php
                    $pMap = [
                        '1º Poomsae' => 1, '2º Poomsae' => 2, '3º Poomsae' => 3, '4º Poomsae' => 4,
                        '5º Poomsae' => 5, '6º Poomsae' => 6, '7º Poomsae' => 7, '8º Poomsae' => 8,
                        'Koryo' => 9, 'Kumgang' => 10,
                    ];
                @endphp
                <table style="width: 100%; border-collapse: separate; border-spacing: 15px 15px; margin-left: -15px;">
                    @foreach(array_chunk(explode("\n", $currentExam['poomsae']), 2) as $row)
                    <tr>
                        @foreach($row as $p)
                            @php
                                $p = trim($p);
                                if ($p == '') continue;
                                $cleanP = preg_replace('/^[-·]\s*/u', '', $p);
                                $pId = null;
                                foreach($pMap as $name => $id) {
                                    if (stripos($cleanP, $name) !== false) {
                                        $pId = $id;
                                        break;
                                    }
                                }
                            @endphp
                            <td style="width: 50%; text-align: center; border: 1px solid #e5e7eb; border-radius: 8px; padding: 15px; background-color: #f9fafb; vertical-align: top;">
                                <h4 style="margin-top: 0; margin-bottom: 10px; color: #111827; font-size: 14px;">{{ $cleanP }}</h4>
                                @if($pId)
                                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=90x90&data={{ urlencode(url('/' . $pId . 'poomsae')) }}" width="90" height="90" style="margin-bottom: 5px;">
                                    <br>
                                    <span style="font-size: 10px; color: #6b7280; text-transform: uppercase; letter-spacing: 1px;">Escanear para ver vídeo</span>
                                @else
                                    <div style="height: 90px; line-height: 90px; color: #9ca3af; font-size: 11px;">(Básico)</div>
                                @endif
                            </td>
                        @endforeach
                        @if(count($row) == 1) <td style="width: 50%; border: none; background: transparent;"></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        @endif

        <div class="section">
            <div class="section-title">4. Aplicación</div>
            
            @if(isset($currentExam['application_kicks']) && $currentExam['application_kicks'] !== '-' && $currentExam['application_kicks'] !== 'No procede')
            <div class="subsection">
                <h4>Patadas en Pao (3 repeticiones por guardia)</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['application_kicks']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if(isset($currentExam['application_combination']) && $currentExam['application_combination'] !== '-' && $currentExam['application_combination'] !== 'No procede')
            <div class="subsection">
                <h4>Combinación</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['application_combination']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if(isset($currentExam['application_kyorugi']) && $currentExam['application_kyorugi'] !== '-' && $currentExam['application_kyorugi'] !== 'No procede')
            <div class="subsection">
                <h4>Kyorugi</h4>
                <table class="tech-table">
                    @foreach(array_chunk(parseTechniques($currentExam['application_kyorugi']), 2) as $row)
                    <tr>
                        @foreach($row as $tech)
                        <td>
                            <span class="tech-korean">{{ $tech['korean'] }}</span>
                            @if(!empty($tech['spanish']))<span class="tech-spanish">{{ $tech['spanish'] }}</span>@endif
                        </td>
                        @endforeach
                        @if(count($row) == 1) <td></td> @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </div>

    </div>

    <div class="footer">
        Impreso desde taekwondofabra.com - Estudia y prepárate bien. ¡Tú puedes!
    </div>

</body>
</html>
