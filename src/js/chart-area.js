// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';


var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7","Day 8","Day 9","Day 10","Day 11","Day 12","Day 13","Day 14","Day 15","Day 16","Day 17","Day 18","Day 19","Day 20","Day 21","Day 22","Day 23","Day 24","Day 25","Day 26","Day 27","Day 28","Day 29","Day 30","Day 31",],
    datasets: [{
      label: "Sessions",
      lineTension: 0.1,
      backgroundColor: "rgba(2,117,216,0.2)",
      borderColor: "rgba(2,117,216,1)",
      pointRadius: 5,
      pointBackgroundColor: "rgba(2,117,216,1)",
      pointBorderColor: "rgba(255,255,255,0.8)",
      pointHoverRadius: 5,
      pointHoverBackgroundColor: "rgba(2,117,216,1)",
      pointHitRadius: 50,
      pointBorderWidth: 2,
      data: [],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
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
          color: "rgba(0, 0, 0, .125)",
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
function changeState_year() {
  const tkArea = document.getElementById('tk_area');
  const tkBar = document.getElementById('tk_bar');
  tkArea.style.display = 'none';
  tkBar.style.display = 'block';
}

const btnChangeState_year = document.getElementById('btn_change_state_year');
btnChangeState_year.addEventListener('click', changeState_year);

function changeState_month() {
  const tkArea = document.getElementById('tk_area');
  const tkBar = document.getElementById('tk_bar');

  tkArea.style.display = 'block';
  tkBar.style.display = 'none';
}

const btnChangeState_month = document.getElementById('btn_change_state_month');
btnChangeState_month.addEventListener('click', changeState_month);

//Month

function toggleDivDisplay() {
 
  const tkArea = document.getElementById('canva_th4');
  const tkAreaTh2 = document.getElementById('canva_th2');
  const tkAreaTh1 = document.getElementById('canva_th1');
  const tkAreaTh3 = document.getElementById('canva_th3');
  const tkAreaTh5 = document.getElementById('canva_th5');
  const tkAreaTh6 = document.getElementById('canva_th6');
  const tkAreaTh7 = document.getElementById('canva_th7');
  const tkAreaTh8 = document.getElementById('canva_th8');
  const tkAreaTh9 = document.getElementById('canva_th9');
  const tkAreaTh10 = document.getElementById('canva_th10');
  const tkAreaTh11 = document.getElementById('canva_th11');
  const tkAreaTh12 = document.getElementById('canva_th12');
 
  const monthSelect = document.getElementById('month-select');

 
  if (monthSelect.value === '2') {
  
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'block';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '1') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'block';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '3') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'block';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '4') {
 
    tkArea.style.display = 'block';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '5') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'block';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '6') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'block';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '7') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'block';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '8') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'block';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '9') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'block';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '10') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'block';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '11') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'block';
    tkAreaTh12.style.display = 'none';
   
  } 
  if (monthSelect.value === '12') {
 
    tkArea.style.display = 'none';
    tkAreaTh2.style.display = 'none';
    tkAreaTh1.style.display = 'none';
    tkAreaTh3.style.display = 'none';
    tkAreaTh5.style.display = 'none';
    tkAreaTh6.style.display = 'none';
    tkAreaTh7.style.display = 'none';
    tkAreaTh8.style.display = 'none';
    tkAreaTh9.style.display = 'none';
    tkAreaTh10.style.display = 'none';
    tkAreaTh11.style.display = 'none';
    tkAreaTh12.style.display = 'block';
   
  } 
}
const monthSelect = document.getElementById('month-select');
monthSelect.addEventListener('change', toggleDivDisplay);


// Year
function toggleDivDisplayYear() {
  const yeartrue = document.getElementById('canva_year1');
  const yearfalse = document.getElementById('canva_year0');
  const yearSelect = document.getElementById('year-select');

  if (yearSelect.value === '1') {
    yeartrue.style.display = 'none';
    yearfalse.style.display = 'block';
    
  }
  
  else if (yearSelect.value === '4') {
    yeartrue.style.display = 'block';
    yearfalse.style.display = 'none';
  }
}

const yearSelect = document.getElementById('year-select');
yearSelect.addEventListener('change', toggleDivDisplayYear);
