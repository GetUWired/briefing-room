<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>The Briefing Room — Records Dashboard</title>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<style>
  body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
  .widget { transition: all 0.15s ease; cursor: pointer; }
  .widget:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.08); transform: translateY(-1px); }
  .widget.active { box-shadow: 0 0 0 2px #1a73e8, 0 4px 12px rgba(26,115,232,0.2); }
  .widget.active .widget-label { color: #1a73e8; }
  .stat-pill {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
  }
  .stat-pill .num { font-size: 1.875rem; font-weight: 600; color: #202124; line-height: 1.1; }
  .stat-pill .lbl { font-size: 0.75rem; color: #5f6368; text-transform: uppercase; letter-spacing: 0.04em; margin-top: 2px; }
  .breakdown-row { display: flex; justify-content: space-between; font-size: 0.75rem; color: #5f6368; padding: 2px 0; }
  .breakdown-row .v { color: #202124; font-weight: 500; }
</style>
</head>
<body class="bg-[#f8f9fa] text-[#202124]">

<div class="max-w-[1440px] mx-auto px-6 py-6">

  <!-- Header -->
  <header class="mb-6 flex items-center justify-between">
    <div>
      <h1 class="text-2xl font-medium text-[#202124]">Records Dashboard</h1>
      <p class="text-sm text-[#5f6368] mt-1">Usage analytics across all agencies</p>
    </div>
    <div class="flex items-center gap-2">
      <button class="px-3 py-1.5 text-sm text-[#1a73e8] border border-[#dadce0] rounded hover:bg-[#f1f3f4]">Print</button>
      <button class="px-3 py-1.5 text-sm text-white bg-[#1a73e8] rounded hover:bg-[#1765cc]">Export</button>
    </div>
  </header>

  <!-- AGENCY-WIDE FIXED STATS -->
  <section class="mb-6">
    <div class="flex items-baseline justify-between mb-3">
      <h2 class="text-sm font-medium text-[#5f6368] uppercase tracking-wide">Agency-Wide Stats</h2>
      <span class="text-sm text-[#202124] font-medium">La Cienega Police Department</span>
    </div>
    <div class="grid grid-cols-12 gap-4">
      <!-- Users (combined) -->
      <div class="col-span-3 bg-white border border-[#dadce0] rounded-lg p-4">
        <div class="text-xs uppercase tracking-wide text-[#5f6368] mb-2">Users</div>
        <div class="text-3xl font-semibold text-[#202124] mb-3">172</div>
        <div class="space-y-1">
          <div class="breakdown-row"><span>Managers</span><span class="v">12</span></div>
          <div class="breakdown-row"><span>Facilitators</span><span class="v">44</span></div>
          <div class="breakdown-row"><span>Students</span><span class="v">116</span></div>
        </div>
      </div>
      <div class="col-span-3 bg-white border border-[#dadce0] rounded-lg p-4">
        <div class="text-xs uppercase tracking-wide text-[#5f6368] mb-2">Total Logins</div>
        <div class="text-3xl font-semibold text-[#202124]">1,062</div>
        <div class="text-xs text-[#34a853] mt-3">▲ 12% vs prior period</div>
      </div>
      <div class="col-span-3 bg-white border border-[#dadce0] rounded-lg p-4">
        <div class="text-xs uppercase tracking-wide text-[#5f6368] mb-2">Sessions Recorded</div>
        <div class="text-3xl font-semibold text-[#202124]">345</div>
        <div class="text-xs text-[#34a853] mt-3">▲ 8% vs prior period</div>
      </div>
      <div class="col-span-3 bg-white border border-[#dadce0] rounded-lg p-4">
        <div class="text-xs uppercase tracking-wide text-[#5f6368] mb-2">Total Training Time</div>
        <div class="text-3xl font-semibold text-[#202124]">562 <span class="text-base font-normal text-[#5f6368]">hrs</span></div>
        <div class="text-xs text-[#34a853] mt-3">▲ 15% vs prior period</div>
      </div>
    </div>
  </section>

  <!-- FILTER BAR -->
  <section class="mb-6 bg-white border border-[#dadce0] rounded-lg p-4">
    <div class="grid grid-cols-12 gap-4 items-end">
      <div class="col-span-4">
        <label class="block text-xs uppercase tracking-wide text-[#5f6368] mb-1">Agency / Sub-Agency</label>
        <select class="w-full border border-[#dadce0] rounded px-3 py-2 text-sm bg-white">
          <option>Alpine Station</option>
          <option>Northside Precinct</option>
          <option>Downtown Division</option>
          <option>K-9 Unit</option>
        </select>
      </div>
      <div class="col-span-3">
        <label class="block text-xs uppercase tracking-wide text-[#5f6368] mb-1">Date Range</label>
        <select class="w-full border border-[#dadce0] rounded px-3 py-2 text-sm bg-white">
          <option>Jan 1, 2026 – Mar 26, 2026</option>
          <option>Last 7 days</option>
          <option>Last 30 days</option>
          <option>Year to date</option>
        </select>
      </div>
      <div class="col-span-3">
        <label class="block text-xs uppercase tracking-wide text-[#5f6368] mb-1">User Role</label>
        <select class="w-full border border-[#dadce0] rounded px-3 py-2 text-sm bg-white">
          <option>All roles</option>
          <option>Managers</option>
          <option>Facilitators</option>
          <option>Students</option>
        </select>
      </div>
      <div class="col-span-2">
        <button class="w-full bg-[#1a73e8] text-white text-sm rounded px-3 py-2 hover:bg-[#1765cc]">Apply filters</button>
      </div>
    </div>
  </section>

  <!-- FILTERED STATS WIDGETS -->
  <section class="mb-4">
    <div class="flex items-baseline justify-between mb-3">
      <h2 class="text-sm font-medium text-[#5f6368] uppercase tracking-wide">Filtered Stats</h2>
      <span class="text-xs text-[#5f6368]">Alpine Station · 1/1/26 – 3/26/26 · Click a widget to update the chart</span>
    </div>
    <div class="grid grid-cols-12 gap-4">
      <!-- Users widget -->
      <div id="w-users" class="widget col-span-3 bg-white border border-[#dadce0] rounded-lg p-4 active" data-chart="users">
        <div class="widget-label text-xs uppercase tracking-wide text-[#5f6368] mb-2">Users</div>
        <div class="text-3xl font-semibold text-[#202124] mb-3">34</div>
        <div class="space-y-1">
          <div class="breakdown-row"><span>Managers</span><span class="v">1</span></div>
          <div class="breakdown-row"><span>Facilitators</span><span class="v">10</span></div>
          <div class="breakdown-row"><span>Students</span><span class="v">23</span></div>
        </div>
      </div>
      <!-- Logins widget -->
      <div id="w-logins" class="widget col-span-3 bg-white border border-[#dadce0] rounded-lg p-4" data-chart="logins">
        <div class="widget-label text-xs uppercase tracking-wide text-[#5f6368] mb-2">Total Logins</div>
        <div class="text-3xl font-semibold text-[#202124] mb-3">125</div>
        <div class="text-xs text-[#5f6368]">across 34 users</div>
        <div class="text-xs text-[#5f6368] mt-1">avg 3.7 logins/user</div>
      </div>
      <!-- Sessions widget -->
      <div id="w-sessions" class="widget col-span-3 bg-white border border-[#dadce0] rounded-lg p-4" data-chart="sessions">
        <div class="widget-label text-xs uppercase tracking-wide text-[#5f6368] mb-2">Sessions Recorded</div>
        <div class="text-3xl font-semibold text-[#202124] mb-3">75</div>
        <div class="text-xs text-[#5f6368]">across 12 weeks</div>
        <div class="text-xs text-[#5f6368] mt-1">avg 6.3 / week</div>
      </div>
      <!-- Training time widget -->
      <div id="w-training" class="widget col-span-3 bg-white border border-[#dadce0] rounded-lg p-4" data-chart="training">
        <div class="widget-label text-xs uppercase tracking-wide text-[#5f6368] mb-2">Total Training Time</div>
        <div class="text-3xl font-semibold text-[#202124] mb-3">17 <span class="text-base font-normal text-[#5f6368]">hrs</span></div>
        <div class="text-xs text-[#5f6368]">across 12 weeks</div>
        <div class="text-xs text-[#5f6368] mt-1">avg 1.4 hrs / week</div>
      </div>
    </div>
  </section>

  <!-- CHART AREA -->
  <section class="bg-white border border-[#dadce0] rounded-lg p-6 mb-6">
    <div class="flex items-baseline justify-between mb-4">
      <div>
        <h3 id="chart-title" class="text-lg font-medium text-[#202124]">User breakdown</h3>
        <p id="chart-subtitle" class="text-sm text-[#5f6368] mt-0.5">Distribution of users by role</p>
      </div>
      <div class="flex gap-1 text-xs">
        <button class="px-2 py-1 border border-[#dadce0] rounded text-[#5f6368] hover:bg-[#f1f3f4]">Day</button>
        <button class="px-2 py-1 border border-[#dadce0] rounded text-[#5f6368] hover:bg-[#f1f3f4]">Week</button>
        <button class="px-2 py-1 border border-[#1a73e8] bg-[#e8f0fe] text-[#1a73e8] rounded">Month</button>
      </div>
    </div>
    <div class="relative" style="height: 360px;">
      <canvas id="mainChart"></canvas>
    </div>
  </section>

  <!-- AI PROMPT -->
  <section class="bg-white border border-[#dadce0] rounded-lg p-4 mb-6">
    <div class="flex items-center gap-3">
      <div class="w-8 h-8 rounded-full bg-gradient-to-br from-[#4285f4] to-[#9b72cb] flex items-center justify-center text-white text-sm font-semibold">AI</div>
      <input type="text" placeholder='Ask about your data — e.g. "Which sergeants on my agency aren't logging in to The Briefing Room?"' class="flex-1 border border-[#dadce0] rounded px-3 py-2 text-sm focus:outline-none focus:border-[#1a73e8]" />
      <button class="px-4 py-2 bg-[#1a73e8] text-white text-sm rounded hover:bg-[#1765cc]">Ask</button>
    </div>
  </section>

</div>

<script>
const ctx = document.getElementById('mainChart').getContext('2d');
let chart;

const palette = {
  blue: '#1a73e8',
  green: '#34a853',
  yellow: '#fbbc04',
  red: '#ea4335',
  purple: '#9b72cb',
  teal: '#12b5cb',
};

const configs = {
  users: {
    title: 'User breakdown',
    subtitle: 'Distribution of 34 users by role at Alpine Station',
    config: {
      type: 'pie',
      data: {
        labels: ['Managers', 'Facilitators', 'Students'],
        datasets: [{
          data: [1, 10, 23],
          backgroundColor: [palette.blue, palette.green, palette.yellow],
          borderColor: '#fff',
          borderWidth: 2,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'right', labels: { font: { size: 13 }, padding: 16 } },
        },
      },
    },
  },
  logins: {
    title: 'Total logins by user',
    subtitle: '125 logins across 34 users · click a bar to drill down',
    config: {
      type: 'bar',
      data: {
        labels: ['M. Reyes', 'J. Park', 'A. Singh', 'C. Brooks', 'D. Tran', 'E. Walsh', 'F. Ortiz', 'G. Liu', 'H. Patel', 'I. Cohen', 'J. Diaz', 'K. Nash'],
        datasets: [{
          label: 'Logins',
          data: [22, 18, 15, 13, 11, 9, 8, 7, 6, 6, 5, 5],
          backgroundColor: palette.blue,
          borderRadius: 4,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, grid: { color: '#f1f3f4' } },
          x: { grid: { display: false } },
        },
      },
    },
  },
  sessions: {
    title: 'Sessions recorded over time',
    subtitle: '75 sessions across 12 weeks',
    config: {
      type: 'line',
      data: {
        labels: ['Wk 1', 'Wk 2', 'Wk 3', 'Wk 4', 'Wk 5', 'Wk 6', 'Wk 7', 'Wk 8', 'Wk 9', 'Wk 10', 'Wk 11', 'Wk 12'],
        datasets: [{
          label: 'Sessions',
          data: [4, 5, 6, 5, 7, 8, 6, 7, 8, 7, 6, 6],
          borderColor: palette.green,
          backgroundColor: 'rgba(52, 168, 83, 0.1)',
          fill: true,
          tension: 0.35,
          pointRadius: 4,
          pointBackgroundColor: palette.green,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, grid: { color: '#f1f3f4' } },
          x: { grid: { display: false } },
        },
      },
    },
  },
  training: {
    title: 'Total training time over time',
    subtitle: '17 hours across 12 weeks',
    config: {
      type: 'line',
      data: {
        labels: ['Wk 1', 'Wk 2', 'Wk 3', 'Wk 4', 'Wk 5', 'Wk 6', 'Wk 7', 'Wk 8', 'Wk 9', 'Wk 10', 'Wk 11', 'Wk 12'],
        datasets: [{
          label: 'Hours',
          data: [0.8, 1.1, 1.3, 1.2, 1.6, 1.8, 1.4, 1.5, 1.7, 1.6, 1.5, 1.5],
          borderColor: palette.purple,
          backgroundColor: 'rgba(155, 114, 203, 0.1)',
          fill: true,
          tension: 0.35,
          pointRadius: 4,
          pointBackgroundColor: palette.purple,
        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
          y: { beginAtZero: true, grid: { color: '#f1f3f4' }, ticks: { callback: v => v + ' hr' } },
          x: { grid: { display: false } },
        },
      },
    },
  },
};

function render(key) {
  const cfg = configs[key];
  document.getElementById('chart-title').textContent = cfg.title;
  document.getElementById('chart-subtitle').textContent = cfg.subtitle;
  if (chart) chart.destroy();
  chart = new Chart(ctx, cfg.config);
  document.querySelectorAll('.widget').forEach(w => w.classList.remove('active'));
  document.querySelector(`[data-chart="${key}"]`).classList.add('active');
}

document.querySelectorAll('.widget').forEach(w => {
  w.addEventListener('click', () => render(w.dataset.chart));
});

render('users');
</script>
</body>
</html>
