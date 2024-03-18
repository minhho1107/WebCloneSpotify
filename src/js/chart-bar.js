
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December",],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 15
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 50,
          maxTicksLimit: 10
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
// Year
function toggleDivDisplayYear() {
  const yeartrue = document.getElementById('canva_year1');
  const yearfalse = document.getElementById('canva_year0');
  const yearSelect = document.getElementById('year-select');

  if (yearSelect.value === '1') {
    yeartrue.style.display = 'none';
    yearfalse.style.display = 'block';
  } else if (yearSelect.value === '4') {
    yeartrue.style.display = 'block';
    yearfalse.style.display = 'none';
  }
}

const yearSelect = document.getElementById('year-select');
yearSelect.addEventListener('change', toggleDivDisplayYear);
