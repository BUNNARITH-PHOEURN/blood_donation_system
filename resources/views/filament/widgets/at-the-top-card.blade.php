<x-filament-widgets::widget>
    <x-filament::section class="custom-section" style="width:63.5vw; padding: 0; margin: 0;">
        <style>
            .custom-section {
                padding: 0 !important;
                margin: 0 !important;
                box-shadow: none !important;
            }

            :root {
                --bg: #f7f3ef;
                --surface: #ffffff;
                --ink: #1a1410;
                --ink-muted: #7a6f68;
                --red: #c0392b;
                --blue: #2563eb;
                --blue-soft: #eff4ff;
                --green: #16a34a;
                --green-soft: #f0fdf4;
                --amber: #d97706;
                --amber-soft: #fffbeb;
                --red-soft: #fdf0ee;
                --shadow: 0 1px 3px rgba(0,0,0,.06), 0 4px 16px rgba(0,0,0,.06);
                --shadow-hover: 0 4px 8px rgba(0,0,0,.08), 0 12px 32px rgba(0,0,0,.1);
                --radius: 20px;
            }

            /* ── Grid ── */
            .stats-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
                width: 100%;
            }

            @media (max-width: 820px) { .stats-grid { grid-template-columns: repeat(2, 1fr); } }
            @media (max-width: 460px) { .stats-grid { grid-template-columns: 1fr; } }

            /* ── Card ── */
            .card {
                background: var(--surface);
                border-radius: var(--radius);
                padding: 10px;
                box-shadow: var(--shadow);
                position: relative;
                overflow: hidden;
                cursor: default;
                display: flex;
                flex-direction: column;
                gap: 6px;
                transition: transform .3s cubic-bezier(.34,1.56,.64,1), box-shadow .3s ease;
                animation: slideUp .55s both;
            }

            .card:nth-child(1) { animation-delay: .05s; }
            .card:nth-child(2) { animation-delay: .12s; }
            .card:nth-child(3) { animation-delay: .19s; }
            .card:nth-child(4) { animation-delay: .26s; }

            @keyframes slideUp {
                from { opacity: 0; transform: translateY(24px); }
                to   { opacity: 1; transform: translateY(0); }
            }

            .card:hover {
                transform: translateY(-5px);
                box-shadow: var(--shadow-hover);
            }

            /* coloured top stripe */
            .card::before {
                content: '';
                position: absolute;
                top: 0; left: 0; right: 0;
                height: 3px;
                border-radius: var(--radius) var(--radius) 0 0;
                background: var(--accent);
                transition: height .3s ease;
            }
            .card:hover::before { height: 5px; }

            /* faint blob */
            .card::after {
                content: '';
                position: absolute;
                bottom: -30px; right: -30px;
                width: 100px; height: 100px;
                border-radius: 50%;
                background: var(--accent-soft);
                opacity: .6;
                transition: transform .4s ease;
            }
            .card:hover::after { transform: scale(1.3); }

            .card--donors    { --accent: var(--blue);  --accent-soft: var(--blue-soft); }
            .card--donations { --accent: var(--red);   --accent-soft: var(--red-soft); }
            .card--units     { --accent: var(--green); --accent-soft: var(--green-soft); }
            .card--pending   { --accent: var(--amber); --accent-soft: var(--amber-soft); }

            .card-label {
                font-size: 12px;
                font-weight: 500;
                letter-spacing: .04em;
                color: var(--ink-muted);
                text-transform: uppercase;
            }

            .card-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-top: 4px;
            }

            .card-value {
                font-family: 'DM Serif Display', serif;
                font-size: 35px;
                line-height: 1;
                color: var(--ink);
                position: relative;
                z-index: 1;
            }

            .icon-bubble {
                width: 48px; height: 48px;
                border-radius: 14px;
                background: var(--accent-soft);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-shrink: 0;
                position: relative;
                z-index: 1;
                transition: transform .3s cubic-bezier(.34,1.56,.64,1);
            }
            .card:hover .icon-bubble { transform: rotate(-8deg) scale(1.1); }
            .icon-bubble svg { width: 22px; height: 22px; }

            .trend {
                display: inline-flex;
                align-items: center;
                gap: 4px;
                margin-top: 10px;
                font-size: 11px;
                font-weight: 600;
                color: var(--accent);
                background: var(--accent-soft);
                padding: 3px 9px;
                border-radius: 100px;
                width: fit-content;
                position: relative;
                z-index: 1;
            }
            .trend svg { width: 12px; height: 12px; }




            /* Blood Stock */

            .blood-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 16px;
                width: 100%;
            }

            .blood-card {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                border: 0.2px solid rgb(211, 211, 211);
                padding: 24px;
                text-align: center;
                transition: transform 0.2s;
                width: 100%; /* make cards fill their grid cell */
            }

            .blood-card:hover {
                transform: translateY(-4px);
            }

            .blood-quantity {
                color: #e3342f;
                font-weight: bold;
                font-size: 24px;
            }

            .blood-type {
                color: #6b7280;
                margin-top: 4px;
                font-size: 16px;
            }

            .low-stock {
                margin-top: 8px;
                padding: 4px 8px;
                background-color: #fed7aa;
                color: #c05621;
                border-radius: 6px;
                font-weight: 600;
                font-size: 14px;
                display: inline-block;
            }
        </style>

        {{-- dashboard top card --}}
        <div class="stats-grid">

  <!-- Total Donors -->
  <div class="card card--donors">
    <p class="card-label">Total Donors</p>
    <div class="card-row">
      <p class="card-value">8</p>
      <div class="icon-bubble">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
          <circle cx="9" cy="7" r="4"/>
          <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
          <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
      </div>
    </div>
    <span class="trend">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"/></svg>
      +12% this month
    </span>
  </div>

  <!-- Total Donations -->
  <div class="card card--donations">
    <p class="card-label">Total Donations</p>
    <div class="card-row">
      <p class="card-value">5</p>
      <div class="icon-bubble">
        <svg viewBox="0 0 24 24" fill="none" stroke="#c0392b" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M12 2C6 8 4 12.5 4 15a8 8 0 0 0 16 0c0-2.5-2-7-8-13z"/>
        </svg>
      </div>
    </div>
    <span class="trend">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"/></svg>
      +5% this week
    </span>
  </div>

  <!-- Available Blood Units -->
  <div class="card card--units">
    <p class="card-label">Available Blood Units</p>
    <div class="card-row">
      <p class="card-value">6</p>
      <div class="icon-bubble">
        <svg viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
          <polyline points="3.27 6.96 12 12.01 20.73 6.96"/>
          <line x1="12" y1="22.08" x2="12" y2="12"/>
        </svg>
      </div>
    </div>
    <span class="trend">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="18 15 12 9 6 15"/></svg>
      In stock
    </span>
  </div>

  <!-- Pending Requests -->
  <div class="card card--pending">
    <p class="card-label">Pending Requests</p>
    <div class="card-row">
      <p class="card-value">2</p>
      <div class="icon-bubble">
        <svg viewBox="0 0 24 24" fill="none" stroke="#d97706" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
          <line x1="16" y1="13" x2="8" y2="13"/>
          <line x1="16" y1="17" x2="8" y2="17"/>
          <polyline points="10 9 9 9 8 9"/>
        </svg>
      </div>
    </div>
    <span class="trend">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="5" x2="12" y2="19"/><polyline points="19 12 12 19 5 12"/></svg>
      Needs review
    </span>
  </div>

</div>


    </x-filament::section>
</x-filament-widgets::widget>
