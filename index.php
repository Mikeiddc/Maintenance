<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Maintenance — Mike Courtier</title>
  <meta name="robots" content="noindex,nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Source+Sans+3:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --green: #8fd19e;
      --green-dark: #6fb885;
      --green-soft: #e6f4ea;
      --ink: #1f2b32;
      --ink-muted: #4a5c66;
      --paper: #fbfcfb;
      --line: rgba(31, 43, 50, 0.08);
    }

    * { box-sizing: border-box; }
    html, body { height: 100%; }
    body {
      margin: 0;
      font-family: "Source Sans 3", system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
      color: var(--ink);
      background:
        radial-gradient(1200px 600px at 10% -10%, rgba(143, 209, 158, 0.22), transparent 55%),
        radial-gradient(900px 500px at 100% 0%, rgba(31, 43, 50, 0.06), transparent 50%),
        linear-gradient(180deg, #f4f8f5 0%, #eef2f0 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 32px 18px;
    }

    .wrap {
      width: min(720px, 100%);
    }

    .card {
      background: var(--paper);
      border: 1px solid var(--line);
      border-radius: 18px;
      box-shadow:
        0 24px 60px rgba(31, 43, 50, 0.10),
        0 2px 8px rgba(31, 43, 50, 0.04);
      overflow: hidden;
      position: relative;
    }

    .card::before {
      content: "";
      position: absolute;
      inset: 0 0 auto 0;
      height: 5px;
      background: linear-gradient(90deg, var(--green) 0%, var(--green-dark) 45%, rgba(31, 43, 50, 0.35) 100%);
    }

    .inner { padding: 40px 34px 36px; }

    @media (min-width: 640px) {
      .inner { padding: 48px 44px 42px; }
    }

    .brand-row {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
      margin-bottom: 26px;
    }

    .mark {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      min-width: 0;
    }

    .sigil {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: linear-gradient(145deg, var(--green) 0%, var(--green-dark) 100%);
      display: grid;
      place-items: center;
      color: #fff;
      box-shadow: 0 10px 22px rgba(111, 184, 133, 0.35);
      flex-shrink: 0;
    }

    .sigil svg { width: 22px; height: 22px; opacity: 0.95; }

    .brand-text {
      min-width: 0;
    }

    .brand-text .kicker {
      font-size: 11px;
      letter-spacing: 0.22em;
      text-transform: uppercase;
      color: var(--ink-muted);
      font-weight: 700;
      margin: 0 0 4px;
    }

    .brand-text .name {
      margin: 0;
      font-family: "Cormorant Garamond", Georgia, serif;
      font-weight: 600;
      font-size: clamp(1.35rem, 2.6vw, 1.65rem);
      line-height: 1.1;
      color: var(--ink);
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .pill {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 12px;
      border-radius: 999px;
      background: var(--green-soft);
      border: 1px solid rgba(143, 209, 158, 0.55);
      color: #2f4a38;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.02em;
      white-space: nowrap;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: var(--green-dark);
      box-shadow: 0 0 0 4px rgba(143, 209, 158, 0.35);
      animation: pulse 1.8s ease-in-out infinite;
    }

    @keyframes pulse {
      0%, 100% { transform: scale(1); opacity: 1; }
      50% { transform: scale(0.92); opacity: 0.75; }
    }

    h1 {
      margin: 0 0 14px;
      font-family: "Cormorant Garamond", Georgia, serif;
      font-weight: 600;
      font-size: clamp(1.85rem, 4.2vw, 2.35rem);
      line-height: 1.15;
      color: var(--ink);
    }

    .lead {
      margin: 0 0 22px;
      font-size: 1.05rem;
      line-height: 1.65;
      color: var(--ink-muted);
      max-width: 58ch;
    }

    .panel {
      border: 1px solid var(--line);
      background: linear-gradient(180deg, rgba(143, 209, 158, 0.10) 0%, rgba(255, 255, 255, 0.65) 100%);
      border-radius: 14px;
      padding: 18px 18px 16px;
      margin: 0 0 22px;
    }

    .panel p {
      margin: 0;
      color: var(--ink);
      line-height: 1.6;
      font-size: 0.98rem;
    }

    .panel strong { font-weight: 700; color: var(--ink); }

    ul {
      margin: 12px 0 0;
      padding-left: 1.15rem;
      color: var(--ink-muted);
      line-height: 1.55;
      font-size: 0.95rem;
    }

    .foot {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding-top: 6px;
      border-top: 1px solid var(--line);
      margin-top: 8px;
    }

    .fine {
      margin: 0;
      font-size: 12px;
      color: var(--ink-muted);
      max-width: 46ch;
      line-height: 1.5;
    }

    .mono {
      font-variant-numeric: tabular-nums;
      letter-spacing: 0.02em;
    }
  </style>
</head>
<body>
  <main class="wrap">
    <article class="card" aria-labelledby="titre-maintenance">
      <div class="inner">
        <div class="brand-row">
          <div class="mark">
            <div class="sigil" aria-hidden="true">
              <!-- Icône “institutionnelle” simple -->
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 10h16" />
                <path d="M6 10V6h12v4" />
                <path d="M8 10v10" />
                <path d="M12 10v10" />
                <path d="M16 10v10" />
                <path d="M5 20h14" />
              </svg>
            </div>
            <div class="brand-text">
              <p class="kicker">Courtier en crédit immobilier</p>
              <p class="name">Mike — partenaire des réseaux bancaires</p>
            </div>
          </div>
          <div class="pill" role="status" aria-live="polite">
            <span class="dot" aria-hidden="true"></span>
            Maintenance en cours
          </div>
        </div>

        <h1 id="titre-maintenance">Bonjour, nous ne sommes pas disponibles pour le moment</h1>

        <p class="lead">
          Notre espace en ligne est temporairement indisponible dans le cadre d’une opération de maintenance.
          Les services liés à l’accompagnement de vos dossiers auprès des <strong>établissements bancaires partenaires</strong>
          seront de nouveau accessibles très prochainement.
        </p>

        <div class="panel">
          <p>
            <strong>Merci de votre patience.</strong> Nous mettons tout en œuvre pour rétablir une expérience fluide, sécurisée et conforme aux exigences des réseaux financiers.
          </p>
          <ul>
            <li>Traitement des demandes et suivi des dossiers : reprise sous peu</li>
            <li>Dépôt de pièces / échanges : rétablissement annoncé à court terme</li>
          </ul>
        </div>

        <div class="foot">
          <p class="fine">
            Message d’information — aucune action n’est requise de votre part. Le site sera <strong>bientôt de nouveau disponible</strong>.
          </p>
          <p class="fine mono" aria-hidden="true">Réf. MAINT</p>
        </div>
      </div>
    </article>
  </main>
</body>
</html>
