const rawLabels = [
    "Braking Performance", "Resistance to Crack", "Initial Bite",
    "Vibration Damping (Noise)", "Pad Life", "Disc Life",
    "Corrosion Resistance", "Dimensional Stability", "Pedal Feel"
];

// Split labels into multiple lines if viewport is under 500px
const formattedLabels = window.innerWidth < 500
? rawLabels.map(label => label.split(' '))
: rawLabels;

const chartConfig = {
    type: 'radar',
    data: {
        labels: formattedLabels,
        datasets: [
        {
            label: 'Standard (Baseline)',
            data: [10, 10, 10, 10, 10, 10, 10, 10, 10],
            fill: true,
            backgroundColor: 'rgba(255, 255, 255, 0.05)',
            borderColor: 'rgba(255, 255, 255, 0.8)',
            pointBackgroundColor: 'white',
            borderWidth: 1,
            pointRadius: 3
        },
        {
            label: 'Competition Series',
            data: [15, 16, 11, 11, 9, 12, 11, 15, 15],
            fill: true,
            backgroundColor: 'rgba(255, 99, 32, 0.2)',
            borderColor: '#ff6320',
            pointBackgroundColor: '#ff6320',
            borderWidth: 2,
            pointRadius: 3
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: { duration: 0 },
        plugins: {
        tooltip: { enabled: false },
        legend: { display: false }
        },
        scales: {
        r: {
            angleLines: { color: '#333' },
            grid: { color: '#333' },
            pointLabels: {
            color: 'white',
            font: ctx => ({
                family: 'Monument Extended Regular',
                size:
                window.innerWidth < 500 ? 7 :
                window.innerWidth < 700 ? 9 :
                window.innerWidth < 900 ? 11 : 12
            })
            },
            ticks: {
            color: '#999',
            backdropColor: 'transparent',
            font: ctx => ({
                family: 'Monument Extended Regular',
                size:
                window.innerWidth < 500 ? 7 :
                window.innerWidth < 700 ? 9 :
                window.innerWidth < 900 ? 11 : 12
            })
            },
            suggestedMin: 0,
            suggestedMax: 20
        }
        }
    }
};

const chartConfigStreet = {
    type: 'radar',
    data: {
        labels: formattedLabels,
        datasets: [
        {
            label: 'Standard (Baseline)',
            data: [10, 10, 10, 10, 10, 10, 10, 10, 10],
            fill: true,
            backgroundColor: 'rgba(42, 75, 124, 0.6)',  // translucent dark blue
            borderColor: 'rgba(42, 75, 124, 1)',        // solid blue border
            pointBackgroundColor: 'white',
            borderWidth: 1,
            pointRadius: 3
        },
        {
            label: 'Street Series',
            data: [13, 11, 13, 11, 9, 12, 12, 14, 12],
            fill: true,
            backgroundColor: 'rgba(42, 75, 124, 0.3)',
            borderColor: 'rgba(42, 75, 124, 0.9)',
            pointBackgroundColor: 'rgba(42, 75, 124, 0.9)',
            borderWidth: 2,
            pointRadius: 3
        }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        animation: { duration: 0 },
        plugins: {
        tooltip: { enabled: false },
        legend: { display: false }
        },
        scales: {
        r: {
            angleLines: { color: '#c6c6c6' },
            grid: { color: '#c6c6c6' },
            pointLabels: {
            color: 'black',
            font: ctx => ({
                family: 'Monument Extended Regular',
                size:
                window.innerWidth < 500 ? 7 :
                window.innerWidth < 700 ? 9 :
                window.innerWidth < 900 ? 11 : 12
            })
            },
            ticks: {
            color: '#a6a6a6',
            backdropColor: 'transparent',
            font: ctx => ({
                family: 'Monument Extended Regular',
                size:
                window.innerWidth < 500 ? 7 :
                window.innerWidth < 700 ? 9 :
                window.innerWidth < 900 ? 11 : 12
            })
            },
            suggestedMin: 0,
            suggestedMax: 20
        }
        }
    }
};

// window.onload = () => {
// const ctx = document.getElementById('brakingRadarChart').getContext('2d');
// new Chart(ctx, chartConfig);

// const ctx2 = document.getElementById('radar-chart-street').getContext('2d');
// new Chart(ctx2, chartConfig);
// };

window.onload = () => {
    const brakingChartEl = document.getElementById('brakingRadarChart');
    if (brakingChartEl) {
      const ctx = brakingChartEl.getContext('2d');
      new Chart(ctx, chartConfig);
    }
  
    const streetChartEl = document.getElementById('radar-chart-street');
    if (streetChartEl) {
      const ctx2 = streetChartEl.getContext('2d');
      new Chart(ctx2, chartConfigStreet);
    }
  };
  