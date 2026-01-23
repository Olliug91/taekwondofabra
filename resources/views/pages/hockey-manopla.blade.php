<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
  :root {
    --bg: #0b1220;
    --card: rgba(16, 26, 47, 0.7);
    --card-hover: rgba(16, 26, 47, 0.9);
    --muted: #9fb0d0;
    --text: #eaf0ff;
    --line: rgba(255, 255, 255, 0.08);
    --accent: #5bd6ff;
    --accent-glow: rgba(91, 214, 255, 0.3);
    --accent2: #a78bfa;
    --ok: #22c55e;
    --warn: #f59e0b;
    --glass-border: rgba(255, 255, 255, 0.1);
  }

  * {
    box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  body {
    margin: 0;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    background:
      radial-gradient(circle at 20% 0%, rgba(91, 214, 255, 0.15), transparent 40%),
      radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.12), transparent 40%),
      var(--bg);
    background-attachment: fixed;
    color: var(--text);
    line-height: 1.6;
  }

  a {
    color: var(--accent);
    text-decoration: none;
    transition: 0.3s;
  }

  a:hover {
    filter: brightness(1.2);
  }

  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 80px;
  }

  .card {
    background: var(--card);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid var(--glass-border);
    border-radius: 24px;
    padding: 24px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.4);
  }

  h1 {
    margin: 0 0 12px;
    font-size: clamp(28px, 5vw, 42px);
    font-weight: 800;
    letter-spacing: -0.02em;
    background: linear-gradient(135deg, #fff 0%, var(--accent) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .subtitle {
    margin: 0;
    color: var(--muted);
    font-size: 16px;
    max-width: 800px;
  }

  .badges {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 20px;
  }

  .badge {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid var(--line);
    padding: 8px 14px;
    border-radius: 12px;
    font-size: 14px;
    font-weight: 600;
    color: var(--accent);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .kpi {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 12px;
    margin-top: 24px;
  }

  .kpi .box {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid var(--glass-border);
    border-radius: 16px;
    padding: 16px;
    text-align: center;
  }

  .kpi .n {
    font-size: 24px;
    font-weight: 800;
    color: #fff;
    display: block;
  }

  .kpi .l {
    color: var(--muted);
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-top: 4px;
    font-weight: 600;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 20px;
    margin-top: 24px;
  }

  .span-12 {
    grid-column: span 12;
  }

  .span-8 {
    grid-column: span 8;
  }

  .span-4 {
    grid-column: span 4;
  }

  @media (max-width: 1024px) {

    .span-8,
    .span-4 {
      grid-column: span 12;
    }

    .grid {
      gap: 16px;
    }
  }

  h2 {
    margin: 0 0 16px;
    font-size: 22px;
    display: flex;
    align-items: center;
    gap: 10px;
    color: #fff;
  }

  h3 {
    margin: 20px 0 10px;
    font-size: 18px;
    color: var(--accent);
  }

  p {
    margin: 0 0 16px;
    color: var(--muted);
  }

  ul {
    margin: 12px 0;
    padding-left: 20px;
    color: var(--muted);
  }

  li {
    margin: 6px 0;
  }

  .rule,
  .note {
    border-radius: 16px;
    padding: 16px;
    margin: 16px 0;
    font-size: 15px;
  }

  .rule {
    border-left: 4px solid var(--accent);
    background: linear-gradient(90deg, rgba(91, 214, 255, 0.1) 0%, transparent 100%);
  }

  .note {
    border-left: 4px solid var(--warn);
    background: linear-gradient(90deg, rgba(245, 158, 11, 0.1) 0%, transparent 100%);
  }

  .table-container {
    width: 100%;
    overflow-x: auto;
    border-radius: 16px;
    border: 1px solid var(--line);
    background: rgba(0, 0, 0, 0.2);
    margin: 16px 0;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;
  }

  th,
  td {
    padding: 14px 16px;
    text-align: left;
    border-bottom: 1px solid var(--line);
    font-size: 14px;
  }

  th {
    background: rgba(255, 255, 255, 0.03);
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 0.05em;
  }

  tr:last-child td {
    border-bottom: none;
  }

  .teams {
    display: grid;
    grid-template-columns: 1fr;
    gap: 16px;
    margin-top: 16px;
  }

  .team {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
    border: 1px solid var(--glass-border);
    border-radius: 20px;
    padding: 20px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .team:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4), 0 0 15px var(--accent-glow);
    border-color: var(--accent);
  }

  .team::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
    transition: 0.5s;
  }

  .team:hover::before {
    left: 100%;
  }

  .team-crest {
    width: 54px;
    height: 54px;
    border-radius: 14px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid var(--line);
    padding: 4px;
    object-fit: contain;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  }

  th {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.03) 100%);
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 0.08em;
    border-bottom: 2px solid var(--line);
  }

  .pill {
    background: linear-gradient(135deg, rgba(91, 214, 255, 0.2) 0%, rgba(91, 214, 255, 0.1) 100%);
    color: var(--accent);
    padding: 5px 12px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 800;
    text-transform: uppercase;
    border: 1px solid rgba(91, 214, 255, 0.2);
  }

  .footer {
    margin-top: 60px;
    padding: 32px 0;
    border-top: 1px solid var(--line);
    color: var(--muted);
    font-size: 14px;
    text-align: center;
    opacity: 0.7;
  }

  @media (max-width: 640px) {
    .container {
      padding: 24px 16px 48px;
    }

    .card {
      padding: 20px;
      border-radius: 20px;
    }

    .kpi {
      grid-template-columns: 1fr 1fr;
      gap: 10px;
    }

    .kpi .box {
      padding: 12px;
    }

    .kpi .n {
      font-size: 20px;
    }

    .team-crest {
      width: 48px;
      height: 48px;
    }

    .team-name strong {
      font-size: 15px;
    }

    h1 {
      margin-bottom: 16px;
    }
  }
</style>
</head>

<body>
  <div class="container">

    <!-- HERO -->
    <section class="hero">
      <div class="card">
        <h1>🏒🥋 Liga Hockey Manopla</h1>
        <p class="subtitle">Liga interna del club para jugar los viernes y sumar puntos en una clasificación hasta final
          de temporada.</p>
        <div class="badges">
          <span class="badge">📅 Viernes</span>
          <span class="badge">⏱️ Calentamiento 15 min</span>
          <span class="badge">⚔️ 2 partidos por jornada (6–7 min)</span>
          <span class="badge">🏆 Clasificación + premio final</span>
        </div>

        <div class="kpi">
          <div class="box">
            <div class="n">4</div>
            <div class="l">Equipos en juego</div>
          </div>
          <div class="box">
            <div class="n">Ene → Jun</div>
            <div class="l">Temporada</div>
          </div>
          <div class="box">
            <div class="n">3 / 1 / 0</div>
            <div class="l">Puntos (V/E/D)</div>
          </div>
          <div class="box">
            <div class="n">Fair Play</div>
            <div class="l">Respeto + seguridad</div>
          </div>
        </div>
      </div>
    </section>

    <div class="grid">
      <!-- EQUIPOS -->
      <section class="card span-4" id="equipos">
        <h2>👥 Equipos</h2>

        <div class="teams">
          <div class="team">
            <h3 class="team-title">
              <span class="team-title-left">
                <img class="team-crest" src="storage/hockey-manopla/dragones.png" alt="Escudo Dragones">
                <span class="team-name">
                  <strong>Dragones</strong>
                  <span class="emoji">Liga Hockey Manopla</span>
                </span>
              </span>
              <span class="pill">Equipo</span>
            </h3>
            <ul>
              <li>Jesús López Gonzalez (49)</li>
              <li>Nicolas Castro (14)</li>
              <li>Juan José Pardo (17)</li>
              <li>Tajmandeep Singh (15)</li>
              <li>Ainhoa Martinez (10)</li>
              <li>Carla Taroncher (10)</li>
            </ul>
          </div>

          <div class="team">
            <h3 class="team-title">
              <span class="team-title-left">
                <img class="team-crest" src="storage/hockey-manopla/tigres.png" alt="Escudo Tigres">
                <span class="team-name">
                  <strong>Tigres</strong>
                  <span class="emoji">Liga Hockey Manopla</span>
                </span>
              </span>
              <span class="pill">Equipo</span>
            </h3>
            <ul>
              <li>Juan Manuel Martinez (48)</li>
              <li>Vicente Castro (17)</li>
              <li>Lucia Martinez (13)</li>
              <li>Rodrigo Lopez (15)</li>
              <li>Nouhaila Laagel (19)</li>
              <li>Nerea Rafael (13)</li>
            </ul>
          </div>

          <div class="team">
            <h3 class="team-title">
              <span class="team-title-left">
                <img class="team-crest" src="storage/hockey-manopla/lobos.png" alt="Escudo Lobos">
                <span class="team-name">
                  <strong>Lobos</strong>
                  <span class="emoji">Liga Hockey Manopla</span>
                </span>
              </span>
              <span class="pill">Equipo</span>
            </h3>
            <ul>
              <li>Rafa Otero (27)</li>
              <li>Franc Martinez (18)</li>
              <li>Jesús Lopez Rojas (13)</li>
              <li>Alula Rawat (15)</li>
              <li>Martina Esteban (15)</li>
              <li>Claudia Lopez (15)</li>
            </ul>
          </div>

          <div class="team">
            <h3 class="team-title">
              <span class="team-title-left">
                <img class="team-crest" src="storage/hockey-manopla/halcones.png" alt="Escudo Halcones">
                <span class="team-name">
                  <strong>Halcones</strong>
                  <span class="emoji">Liga Hockey Manopla</span>
                </span>
              </span>
              <span class="pill">Equipo</span>
            </h3>
            <ul>
              <li>Oussame Ezzine (26)</li>
              <li>Favour Enadeghe (21)</li>
              <li>Mar Plaza (17)</li>
              <li>Samuel Peña (14)</li>
              <li>Miguel Fernandez (13)</li>
              <li>Irene Garcia (15)</li>
            </ul>
          </div>

        </div>
      </section>
      <!-- BASES -->
      <section class="card span-8" id="bases">
        <h2>📌 Bases de la liga</h2>

        <h3>¿Qué es?</h3>
        <p>La Liga de Hockey Manopla es una competición interna del club en la que, mediante un juego por equipos,
          entrenamos coordinación, trabajo en equipo, respeto y diversión. Se jugará <strong>todos los viernes</strong>
          dentro de la clase de Taekwondo.</p>

        <h3>¿Quién puede participar?</h3>
        <ul>
          <li>Todos los alumnos del grupo.</li>
          <li>La participación es obligatoria y siempre respetuosa.</li>
        </ul>

        <h3>¿Cómo se juega?</h3>
        <ul>
          <li>Dos equipos enfrentados.</li>
          <li>Material: manoplas de golpeo, pelota de goma y conos como porterías.</li>
          <li>Los goles se marcan golpeando la pelota con la manopla.</li>
          <li>Partidos cortos y adaptados al grupo.</li>
        </ul>

        <h3>Normas básicas</h3>
        <ol class="muted">
          <li>Prohibido golpear a compañeros.</li>
          <li>Respeto y deportividad en todo momento.</li>
          <li>Las decisiones del entrenador son definitivas.</li>
          <li>Todos juegan y todos cuentan.</li>
          <li>El mal comportamiento puede suponer pérdida de puntos.</li>
        </ol>

        <h3>Sistema de puntuación</h3>
        <div class="rule">
          <strong>Victoria:</strong> 3 puntos · <strong>Empate:</strong> 1 punto · <strong>Derrota:</strong> 0 puntos
        </div>

        <h3>Asistencia y encuentros</h3>
        <div class="rule">
          <strong>Equipo incompleto:</strong> Se permite completar con jugadores externos (sin enfrentamiento
          directo) <strong>hasta llegar a 4</strong>, siempre que haya <strong>al menos 1 miembro del equipo
            original</strong>.<br />
          <em style="font-size:0.9em; display:block; margin-top:4px">Ejemplo: Si hay 1, se pueden pedir 3. Si hay 2, se
            piden 2.</em>
          Si no hay ningún miembro original, partido perdido (+3 para el rival).<br />
          <strong>Ambos incompletos:</strong> 0 puntos para ambos.
        </div>

        <h3>Final de temporada y premio</h3>
        <ul>
          <li>Habrá un equipo ganador.</li>
          <li>El equipo ganador obtendrá un premio especial.</li>
        </ul>

        <h3>Objetivo principal</h3>
        <p><strong>Respeto · Esfuerzo · Compañerismo · Disciplina</strong></p>
      </section>



      <!-- CALENDARIO (VISUAL) -->
      <section class="card span-12" id="calendario">
        <h2>📅 Calendario de enfrentamientos (Ene–Jun 2026)</h2>
        <p class="small">
          Mantengo la <strong>Jornada 1</strong> tal cual: <strong>Dragones vs Halcones</strong> y <strong>Dragones vs
            Tigres</strong>.
          A partir de ahí rotamos para minimizar repeticiones consecutivas.
        </p>

        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th style="width:140px">Viernes</th>
                <th class="center" style="width:70px">Jor.</th>
                <th>Partido 1</th>
                <th>Partido 2</th>
              </tr>
            </thead>
            <tbody>
              <!-- Helper: bloque visual de partido -->
              <!-- Estructura:
            Equipo A vs Equipo B
            Resultado: __ - __
            Puntos: A __ | B __
        -->

              <tr>
                <td>09/01/2026</td>
                <td class="center"><span class="pill">J1</span></td>
                <td>
                  <strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br>
                  <span class="small">Resultado:</span> <strong>3</strong> - <strong>1</strong><br>
                  <span class="small">Puntos:</span>
                  🐉 <strong>3</strong> &nbsp;|&nbsp; 🦅 <strong>0</strong>
                </td>
                <td>
                  <strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br>
                  <span class="small">Resultado:</span> <strong>3</strong> - <strong>2</strong><br>
                  <span class="small">Puntos:</span>
                  🐉 <strong>3</strong> &nbsp;|&nbsp; 🐯 <strong>0</strong>
                </td>
              </tr>

              <tr>
                <td>16/01/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td>
                  <strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br>
                  <span class="small">Resultado:</span> <strong>3</strong> - <strong>0</strong><br>
                  <span class="small">Puntos:</span>
                  🐉 <strong>3</strong> &nbsp;|&nbsp; 🐺 <strong>0</strong>
                </td>
                <td>
                  <strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br>
                  <span class="small">Resultado:</span> <strong>4</strong> - <strong>2</strong><br>
                  <span class="small">Puntos:</span>
                  🦅 <strong>3</strong> &nbsp;|&nbsp; 🐯 <strong>0</strong>
                </td>
              </tr>

              <tr>
                <td>23/01/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td>
                  <strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br>
                  <span class="small">Resultado:</span> <strong>__</strong> - <strong>__</strong><br>
                  <span class="small">Puntos:</span>
                  🐯 <strong>__</strong> &nbsp;|&nbsp; 🐺 <strong>__</strong>
                </td>
                <td>
                  <strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br>
                  <span class="small">Resultado:</span> <strong>__</strong> - <strong>__</strong><br>
                  <span class="small">Puntos:</span>
                  🐉 <strong>__</strong> &nbsp;|&nbsp; 🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>30/01/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td>
                  <strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br>
                  <span class="small">Resultado:</span> <strong>__</strong> - <strong>__</strong><br>
                  <span class="small">Puntos:</span>
                  🦅 <strong>__</strong> &nbsp;|&nbsp; 🐺 <strong>__</strong>
                </td>
                <td>
                  <strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br>
                  <span class="small">Resultado:</span> <strong>__</strong> - <strong>__</strong><br>
                  <span class="small">Puntos:</span>
                  🐉 <strong>__</strong> &nbsp;|&nbsp; 🐯 <strong>__</strong>
                </td>
              </tr>

              <!-- Repetimos ciclo J2-J4 hasta junio -->
              <tr>
                <td>06/02/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>13/02/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>20/02/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>27/02/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>06/03/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>13/03/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>20/03/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>27/03/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>03/04/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>10/04/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>17/04/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>24/04/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>01/05/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>08/05/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>15/05/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>22/05/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>29/05/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>05/06/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>12/06/2026</td>
                <td class="center"><span class="pill">J2</span></td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>19/06/2026</td>
                <td class="center"><span class="pill">J3</span></td>
                <td><strong>🐯 Tigres</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐯 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🦅 Halcones</strong><br><span
                    class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🦅 <strong>__</strong>
                </td>
              </tr>

              <tr>
                <td>26/06/2026</td>
                <td class="center"><span class="pill">J4</span></td>
                <td><strong>🦅 Halcones</strong> vs <strong>🐺 Lobos</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🦅 <strong>__</strong>
                  |
                  🐺 <strong>__</strong>
                </td>
                <td><strong>🐉 Dragones</strong> vs <strong>🐯 Tigres</strong><br><span class="small">Resultado:</span>
                  <strong>__</strong> - <strong>__</strong><br><span class="small">Puntos:</span> 🐉 <strong>__</strong>
                  |
                  🐯 <strong>__</strong>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="note">
          <strong>Importante:</strong> si un equipo está incompleto, puede completarse con jugadores externos hasta ser
          4 (siempre que haya al menos 1 original).
          Si no hay nadie del equipo, se da por perdido (rival +3).
        </div>
      </section>


      <!-- CLASIFICACION -->
      <section class="card span-12" id="clasificacion">
        <h2>📊 Clasificación general</h2>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th class="center">Pos.</th>
                <th>Equipo</th>
                <th class="center">PJ</th>
                <th class="center">PG</th>
                <th class="center">PE</th>
                <th class="center">PP</th>
                <th class="center">GF</th>
                <th class="center">GC</th>
                <th class="center">DG</th>
                <th class="center">Puntos</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="center">1</td>
                <td>🐉 Dragones</td>
                <td class="center">3</td>
                <td class="center">3</td>
                <td class="center">0</td>
                <td class="center">0</td>
                <td class="center">9</td>
                <td class="center">3</td>
                <td class="center">+6</td>
                <td class="center">9</td>
              </tr>
              <tr>
                <td class="center">2</td>
                <td>🦅 Halcones</td>
                <td class="center">2</td>
                <td class="center">1</td>
                <td class="center">0</td>
                <td class="center">1</td>
                <td class="center">5</td>
                <td class="center">5</td>
                <td class="center">0</td>
                <td class="center">3</td>
              </tr>
              <tr>
                <td class="center">3</td>
                <td>🐯 Tigres</td>
                <td class="center">2</td>
                <td class="center">0</td>
                <td class="center">0</td>
                <td class="center">2</td>
                <td class="center">4</td>
                <td class="center">7</td>
                <td class="center">-3</td>
                <td class="center">0</td>
              </tr>
              <tr>
                <td class="center">4</td>
                <td>🐺 Lobos</td>
                <td class="center">1</td>
                <td class="center">0</td>
                <td class="center">0</td>
                <td class="center">1</td>
                <td class="center">0</td>
                <td class="center">3</td>
                <td class="center">-3</td>
                <td class="center">0</td>
              </tr>
            </tbody>
          </table>
        </div>

        <p class="small" style="margin-top:10px">
          <strong>Puntos:</strong> Victoria 3 · Empate 1 · Derrota 0 · Incompleto: Se puede completar hasta 4 (mín. 1
          original). Si no, perdido (rival +3).
        </p>
      </section>
      <!-- GOLEADORES -->
      <section class="card span-12" id="goleadores">
        <h2>⚽ Goleadores</h2>
        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>Jugador/a</th>
                <th class="center">Goles</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Miguel (Halcones)</td>
                <td class="center">2</td>
              </tr>
              <tr>
                <td>Samuel (Halcones)</td>
                <td class="center">2</td>
              </tr>
              <tr>
                <td>Nerea (Tigres)</td>
                <td class="center">1</td>
              </tr>
              <tr>
                <td>Nouhaila (Tigres)</td>
                <td class="center">1</td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>
    </div>
    <div class="footer">
      <div>© Liga Hockey Manopla – Taekwondo</div>
    </div>
  </div>
</body>

</html>