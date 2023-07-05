/* global Chart:false */

$(function () {
  'use strict'

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-----------------------
  // - MONTHLY SALES CHART -
  //-----------------------

  // Get context with jQuery - using jQuery's .get() method.
  var cusStatusChartCanvas = $('#cusStatusChart').get(0).getContext('2d')

  var cusStatusChartData = {
    labels: ['MON', 'TUE', 'WEN', 'THUR', 'FRI', 'SAT', 'SUN'],
    datasets: [
      {
        label: 'Pending',
        backgroundColor: '#6c757d',
        borderColor: '#6c757d',
        pointRadius: false,
        pointColor: '#5a6268',
        pointStrokeColor: '#5a6268',
        pointHighlightFill: '#fff',
        pointHighlightStroke: '#5a6268',
        data: [28, 48, 40, 19, 86, 27, 90]
      },
      {
        label: 'Called',
        backgroundColor: '#28a745',
        borderColor: '#28a745',
        pointRadius: false,
        pointColor: '#19692c',
        pointStrokeColor: '#19692c',
        pointHighlightFill: '#fff',
        pointHighlightStroke: '#19692c',
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: 'Schedule',
        backgroundColor: '#17a2b8',
        borderColor: '#17a2b8',
        pointRadius: false,
        pointColor: '#138496',
        pointStrokeColor: '#138496',
        pointHighlightFill: '#fff',
        pointHighlightStroke: '#138496',
        data: [25, 46, 78, 63, 14, 39, 54]
      },
      {
        label: 'Contracted',
        backgroundColor: '#ffc107',
        borderColor: '#ffc107',
        pointRadius: false,
        pointColor: '#e0a800',
        pointStrokeColor: '#e0a800',
        pointHighlightFill: '#fff',
        pointHighlightStroke: '#e0a800',
        data: [5, 1, 12, 15, 6, 9, 10]
      }
    ]
  }

  var cusStatusChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: true
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    },
  }

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  new Chart(cusStatusChartCanvas, {
    type: 'bar',
    data: cusStatusChartData,
    options: cusStatusChartOptions
  })

  //---------------------------
  // - END MONTHLY SALES CHART -
  //---------------------------

  //-------------
  // - PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
  var pieData = {
    labels: [
      'North',
      'Center',
      'South',
    ],
    datasets: [
      {
        data: [3700, 3500, 2400],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12']
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    }
  }
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  new Chart(pieChartCanvas, {
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  })

  //-----------------
  // - END PIE CHART -
  //-----------------
})
