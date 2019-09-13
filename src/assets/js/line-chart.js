let canvas = document.getElementById("line-chart");
// Make it visually fill the positioned parent
canvas.style.width = "100%";
canvas.style.height = "100%";
// ...then set the internal size to match
canvas.width = canvas.offsetWidth;
canvas.height = canvas.offsetHeight;

let c = canvas.getContext("2d");

var chart = new Chart(c, {
    // The type of chart we want to create
    type: "line",
    // The data for our dataset
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [{
            label: false,
            fill: "false",
            backgroundColor: "rgb(255, 99, 132)",
            borderColor: "rgb(255, 99, 132)",
            data: [0, 10, 5, 35, 20, 30, 45]
        }]
    },

    // Configuration options go here
    options: {}
});


let tasksDoneChart = document.getElementById("tasks-done-chart");
// Make it visually fill the positioned parent
// tasksDoneChart.style.width = "90%";
// tasksDoneChart.style.height = "90%";
// ...then set the internal size to match
// tasksDoneChart.width = canvas.offsetWidth;
// tasksDoneChart.height = canvas.offsetHeight;



let tasksDoneChartContext = tasksDoneChart.getContext("2d");

var chart = new Chart(tasksDoneChartContext, {
    // The type of chart we want to create
    type: "doughnut",

    // The data for our dataset
    data: {

        labels: ["DONE", "WIP", "TODO"],
        datasets: [{
            backgroundColor: [
                'rgba(255, 99, 132)',
                'rgba(54, 162, 235)',
                'rgba(255, 206, 86)',
            ],
            borderWidth: 5,
            borderColor: "#19222f",
            data: [15, 65, 20]
        }]
    },

    // Configuration options go here
    options: {
        cutoutPercentage: 50,
        rotation: 10,
    }
});