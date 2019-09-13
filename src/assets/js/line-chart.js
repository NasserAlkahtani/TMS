console.log("ssds");

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